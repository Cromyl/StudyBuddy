<?php
     $conn=mysqli_connect('sql12.freesqldatabase.com','sql12608210','fBXhWL98H4','sql12608210') or die("Connection failed" .mysqli_connect_error());
?>
<!DOCTYPE html>
<html lang="en">
<head>
<script type="text/javascript">
    function validate() {
        var name = document.forms["myform"]["name"].value;
        if(name==""){
            alert("Please enter your name!");
            return false;
        }
        else{
            var reg=/[^a-zA-Z\ ]+/;
            if (reg.test(name)){
                alert("Name should only contain alphabets and spaces!");
                return false;
            }
        }
        var rollno= document.forms["myform"]["Roll_Number"].value;
        if(rollno==""){
            alert("Please enter your Roll Number!");
            return false;
        }
        var semester = document.forms["myform"]["Semester"].value;
        if(semester==""){
            alert("Please Enter Semester!");
            return false;
        }
        else if(semester > 8){
            alert("Enter Correct Semester(less than 9)!");
            return false;
        }
        var password = document.forms["myform"]["password"].value;
        if(password==""){
            alert("Please enter the password");
            return false;
        }
        else{
            var reg=/[^a-zA-Z0-9\!\@\#\$]+/;
            if (reg.test(password)){
                alert("Password should not contain characters other than A-Z/a-z/0-9/!/@/#/$");
                return false;
            }
        }
    }
</script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
        if(isset($_POST['name'])&& isset($_POST['Roll_Number']) && isset($_POST['Semester']) && isset($_POST['password'])){
        $name=$_POST['name'];
        $rollnumber=$_POST['Roll_Number'];
        $semester=$_POST['Semester'];
        $password=$_POST['password'];
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
?>
        <h1>Register New User</h1>    
        <form name="myform" action="RegisterUser.php"  onsubmit="return validate()" method="POST">
            <label for="name">Name:</label><br>
            <input  type="text" name="name" id="name" required placeholder="Name"><br><br>
            <label for="Roll_Number">Roll_Number:</label><br>
            <input  type="text" name="Roll_Number" id="Roll_Number" required placeholder="Roll_Number"><br><br>
            <label for="Semester">Semester:</label><br>
            <input  type="text" name="Semester" id="Semester" required placeholder="Semester"><br><br>      
            <label for="password">Password:</label><br>
            <input type="text" name="password" id="password" required placeholder="Password"><br><br>
    
            <input type="submit" name="submit" id="submit">
        </form>
    </div>
    </div>
</body>
</html>