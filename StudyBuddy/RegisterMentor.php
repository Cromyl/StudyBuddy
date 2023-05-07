<?php
    $conn=mysqli_connect('localhost','root','','studybuddy') or die("Connection failed" .mysqli_connect_error());
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
        if(isset($_POST['name'])&& isset($_POST['type']) && isset($_POST['UserID']) && isset($_POST['password']) && isset($_POST['email'])){
            $UserID=$_POST['UserID'];
            $name=$_POST['name'];
            $type=$_POST['type'];
            $password=$_POST['password'];
            $email=$_POST['email'];

            $sql2="SELECT count(*) FROM Mentor WHERE id='$UserID'";
            $query2=mysqli_query($conn,$sql2);
            $row2=mysqli_fetch_array($query2);
            
            if($row2[0]==1){
                $failed=1;
                ?>
                
                <script type="text/javascript">
        window.location.href = 'RegisterMentor.php?msg=failed';
        </script>
                <?php
            }
            else{
                $sql="INSERT INTO Mentor VALUES ('$UserID','$name','$type','$password','$email')";
                $query =mysqli_query($conn,$sql);
                if($query){
                    ?>
                        <script type="text/javascript">
        window.location.href = 'MentorLogin.php';
        </script>
                    <?php
                }
                else{
                    echo 'Value exists';
                }
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script type="text/javascript">
    function validate() {
        var userid= document.forms["myform"]["UserID"].value;
        if(userid.length!=8){
            alert("Recheck your id format!");
            return false;
        }
        else{
            var userid1=userid.substr(0,4);
            var reg=/[^A-Z]+/;
            if(reg.test(userid1)){
                alert("Incorrect id format!");
                return false;
            }
            var userid2=userid.substr(5);
            var reg=/[^0-9]+/;
            if(reg.test(userid2)){
                alert("Incorrect id format!");
                return false;
            }
        }

        var name = document.forms["myform"]["name"].value;
        var reg=/[^a-zA-Z\ ]+/;
        if (reg.test(name)){
            alert("Name should only contain alphabets and spaces!");
            return false;
        }

        var type = document.forms["myform"]["type"].value;
        if(type=="C"){
            alert("Choose a role first!");
            return false;
        }

        var password = document.forms["myform"]["password"].value;
        var reg=/[^a-zA-Z0-9\!\@\#\$]+/;
        if (reg.test(password)){
            alert("Password should not contain characters other than A-Z/a-z/0-9/!/@/#/$");
            return false;
        }

        var password2 = document.forms["myform"]["password2"].value;
        if(password!=password2){
            alert("Passwords do not match!");
            return false;
        }

    }
    </script>

    <style>
        
            @import url('https://fonts.googleapis.com/css?family=Exo:400,700');

*{
    margin: 0px;
    padding: 0px;
}

body{
    font-family: 'Exo', sans-serif;
    z-index: -2;
}


.context {
    width: 100%;
    position: absolute;
    top:50vh;
    
}

.context h1{
    text-align: center;
    color: #fff;
    font-size: 50px;
}


.area{
    background: #4e54c8;  
    background: -webkit-linear-gradient(to left, #8f94fb, #4e54c8);  
    width: 100%;
    height:100%;
    z-index: -2;
   
}

.circles{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: overflow-y;
    z-index: 0;
}

.circles li{
    position: absolute;
    display: block;
    list-style: none;
    width: 20px;
    height: 20px;
    background: rgba(255, 255, 255, 0.2);
    animation: animate 25s linear infinite;
    bottom: -150px;
    
}

.circles li:nth-child(1){
    left: 25%;
    width: 80px;
    height: 80px;
    animation-delay: 0s;
}


.circles li:nth-child(2){
    left: 10%;
    width: 20px;
    height: 20px;
    animation-delay: 2s;
    animation-duration: 12s;
}

.circles li:nth-child(3){
    left: 70%;
    width: 20px;
    height: 20px;
    animation-delay: 4s;
}

.circles li:nth-child(4){
    left: 40%;
    width: 60px;
    height: 60px;
    animation-delay: 0s;
    animation-duration: 18s;
}

.circles li:nth-child(5){
    left: 65%;
    width: 20px;
    height: 20px;
    animation-delay: 0s;
}

.circles li:nth-child(6){
    left: 75%;
    width: 110px;
    height: 110px;
    animation-delay: 3s;
}

.circles li:nth-child(7){
    left: 35%;
    width: 150px;
    height: 150px;
    animation-delay: 7s;
}

.circles li:nth-child(8){
    left: 50%;
    width: 25px;
    height: 25px;
    animation-delay: 15s;
    animation-duration: 45s;
}

.circles li:nth-child(9){
    left: 20%;
    width: 15px;
    height: 15px;
    animation-delay: 2s;
    animation-duration: 35s;
}

.circles li:nth-child(10){
    left: 85%;
    width: 150px;
    height: 150px;
    animation-delay: 0s;
    animation-duration: 11s;
}
.card{
    z-index: 2;
}

.navbar{
    z-index: 2;
}
.card{
                box-shadow: 0 0 20px 2px rgba(0,0,0,.1);
                transition:0.7s;
            }
            .card:hover{
                transform:scale(1.1);
                z-index:2;
            }

            .section{
    z-index: 2;
}
.form{
    z-index: 2;
}
.form-floating{
    z-index: 2;
}
.btn{
    z-index: 2;
}
.d-grid{
    z-index: 2;
}

@keyframes animate {

    0%{
        transform: translateY(0) rotate(0deg);
        opacity: 1;
        border-radius: 0;
    }

    100%{
        transform: translateY(-1000px) rotate(720deg);
        opacity: 0;
        border-radius: 50%;
    }

}

        </style>
    

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- Favicon-->
     <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="styles.css" rel="stylesheet" />
</head>
<body class="area" style="">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="#!" style="font-size:40px; font-weight:bold;">StudyBuddy</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                          </ul>
                </div>
            </div>
        </nav>
    <!-- <h1>Register New User</h1>    
    <form name="myform" action="RegisterMentor.php" onsubmit="return validate()" method="POST">
    <label for="UserID">UserID:</label><br>
    <input  type="text" name="UserID" id="UserID" required placeholder="UserID"><br><br>
    <label for="name">Username:</label><br>
    <input  type="text" name="name" id="name" required placeholder="Username"><br><br>
    <label for="type">Role:</label><br>
    <select name="type" id="type">
        <option value="C">Choose:</option>
        <option value="A">Admin</option>
        <option value="P">Professor</option>
        <option value="T">Teaching Assistant</option>
    </select><br><br>
    <label for="password">Password:</label><br>
    <input type="password" name="password" id="password" required placeholder="Password"><br><br>
    <label for="password2">Confirm Password:</label><br>
    <input type="password" name="password2" id="password2" required placeholder="Re-type Password"><br><br>
    <input type="submit" name="submit" id="submit">
    </form> -->
    <section class=" py-5">
        <div class="container px-5 my-5 px-5">
            <div class="text-center mb-5">
              <h2 class="fw-bolder" style="color: white">REGISTER</h2><br><br>

                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-4">
                        <form name="myform" action="RegisterMentor.php" onsubmit="return validate()"  method="POST">
                            <div class="mb-3 form-floating" >
                                <input  class="form-control"  type="text" name="UserID" id="UserID" required placeholder="UserID">
                                <label  for="UserID">UserID:</label>
                            </div>

                            <div class="mb-3 form-floating" >
                                <input  class="form-control" type="text" name="name" id="name" required placeholder="Username">
                                <label for="name">Username:</label>
                            </div>
                            <div class="mb-3 form-floating" >
                            <!-- <label for="type" style="padding:0.75rem">Role:</label> -->
                            <select for="type" class="form-control" name="type" id="type">
                                <option value="C">Select Role:</option>
                                <option value="A">Admin</option>
                                <option value="P">Professor</option>
                                <option value="T">Teaching Assistant</option>
                            </select>
                            </div>

                            <div class="mb-3 form-floating">                        
                                <input class="form-control" type="email" name="email" id="email" required placeholder="Email">    
                                <label for="email">Email:</label>
                            </div>

                            <div class="mb-3 form-floating">                        
                                <input class="form-control" type="password" name="password" id="password" required placeholder="Password">    
                                <label for="password">Password:</label>
                            </div>
                            <div class="mb-3 form-floating">                        
                                <input class="form-control" type="password" name="password2" id="password2" required placeholder="Re-type Password">
                                <label for="password2">Confirm Password:</label>
                            </div>
                            <div class="d-grid">
                                <input class="btn btn-primary btn-lg" type="submit" name="submit" id="submit">
                            </div>
                              
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
    if (isset($_GET["msg"]) && $_GET["msg"] == 'failed') {
        //echo 'UserID';
        ?>
        <script type="text/javascript">
            alert("UserID already taken!");
        </script>
        <?php
    }
?>
<ul class="circles" >
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
            </ul>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>