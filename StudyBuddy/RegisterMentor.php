<?php
    $conn=mysqli_connect('sql12.freesqldatabase.com','sql12608210','fBXhWL98H4','sql12608210') or die("Connection failed" .mysqli_connect_error());
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
        if(isset($_POST['name'])&& isset($_POST['type']) && isset($_POST['UserID']) && isset($_POST['password'])){
            $UserID=$_POST['UserID'];
            $name=$_POST['name'];
            $type=$_POST['type'];
            $password=$_POST['password'];

            $sql2="SELECT count(*) FROM Mentor WHERE id='$UserID'";
            $query2=mysqli_query($conn,$sql2);
            $row2=mysqli_fetch_array($query2);
            
            if($row2[0]==1){
                $failed=1;
                header("Location: RegisterMentor.php?msg=failed");
            }
            else{
                $sql="INSERT INTO Mentor VALUES ('$UserID','$name','$type','$password')";
                $query =mysqli_query($conn,$sql);
                if($query){
                    header("Location: MentorLogin.php");
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
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="#!">StudyBuddy</a>
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
    <section class="bg-light py-5">
        <div class="container px-5 my-5 px-5">
            <div class="text-center mb-5">
              <h2 class="fw-bolder">REGISTER</h2><br><br>

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