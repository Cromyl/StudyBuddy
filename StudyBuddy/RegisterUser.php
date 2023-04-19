<?php
    $conn=mysqli_connect('localhost','root','','studybuddy') or die("Connection failed" .mysqli_connect_error());
?>
<!DOCTYPE html>
<html lang="en">
<head>
<script type="text/javascript">
    function validate() {
        var name = document.forms["myform"]["name"].value;
        var reg=/[^a-zA-Z\ ]+/;
        if (reg.test(name)){
            alert("Name should only contain alphabets and spaces!");
            return false;
        }

        var rollno= document.forms["myform"]["Roll_Number"].value;
        if(rollno.length!=10){
            alert("Recheck your roll number!");
            return false;
        }
        else{
            var rollno1=rollno.substr(0,2);
            var reg=/[^A-Z]+/;
            if(reg.test(rollno1)){
                alert("Incorrect roll format!");
                return false;
            }
            var rollno2=rollno.substr(3);
            var reg=/[^0-9]+/;
            if(reg.test(rollno2)){
                alert("Incorrect roll format!");
                return false;
            }
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
<?php
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
        if(isset($_POST['name'])&& isset($_POST['Roll_Number']) && isset($_POST['Semester']) && isset($_POST['password'])){
            $name=$_POST['name'];
            $rollnumber=$_POST['Roll_Number'];
            $semester=$_POST['Semester'];
            $password=$_POST['password'];

            $sql2="SELECT count(*) FROM Student WHERE Rollno='$rollnumber'";
            $query2=mysqli_query($conn,$sql2);
            $row2=mysqli_fetch_array($query2);

            if($row2[0]==1){
                $failed=1;
                header("Location: RegisterUser.php?msg=failed");
            }
            else{
                $sql="INSERT INTO  Student VALUES ('$rollnumber','$name','$semester','$password')";
                $query =mysqli_query($conn,$sql);
                if($query){
                    
                    header("Location: UserLogin.php");
                }
                else{
                    echo 'Value exists';
                }
            }
        // else{
        //     echo 'Invalid input';
        // }
        }
    }
?>
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
        <section class="bg-light py-5">
        <div class="container px-5 my-5 px-5">
            <div class="text-center mb-5">
              <h2 class="fw-bolder">REGISTER</h2><br><br>

                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-4">
                        <form name="myform" action="RegisterUser.php" onsubmit="return validate()"  method="POST">
                            <div class="mb-3 form-floating" >
                                <input class="form-control" type="text" name="name" id="name" required placeholder="Name">
                                <label for="name">Name:</label>
                            </div>

                            <div class="mb-3 form-floating" >
                                <input  class="form-control" type="text" name="Roll_Number" id="Roll_Number" required placeholder="Roll_Number">
                                <label for="Roll_Number">Roll_Number:</label>
                            </div>
                            <div class="mb-3 form-floating">                        
                                <input  class="form-control" type="number" name="Semester" id="Semester" required placeholder="Semester" min="1" max="8"> 
                                <label for="Semester">Semester:</label>
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
            alert("Roll Number already exists!");
        </script>
        <?php
    }
?>  
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>