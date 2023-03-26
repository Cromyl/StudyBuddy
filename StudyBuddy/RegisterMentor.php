<?php
     $conn=mysqli_connect('sql12.freesqldatabase.com','sql12608210','fBXhWL98H4','sql12608210') or die("Connection failed" .mysqli_connect_error());
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script type="text/javascript">
    function validate() {
        var id = document.forms["myform"]["UserID"].value;
        if(id==""){
            alert("Please enter your ID!");
            return false;
        }
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
        var role = document.forms["myform"]["Type"].value;
        if(role==""){
            alert("Please Enter your Role!");
            return false;
        }
        else if(role != "A" && role != "P" && role != "T"){
            alert("Enter your Role (A/P/T)!");
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
        if(isset($_POST['name'])&& isset($_POST['Type']) && isset($_POST['UserID']) && isset($_POST['password'])){
        $UserID=$_POST['UserID'];
        $name=$_POST['name'];
        $Type=$_POST['Type'];
        $password=$_POST['password'];
        //if(($Type=='P' || $Type=='A' || $Type=='T' )&& ctype_alpha($name)==true){
            $sql="INSERT INTO Mentor VALUES ('$UserID','$name','$Type','$password')";
            $query =mysqli_query($conn,$sql);
            if($query){
                
                header("Location: MentorLogin.php");
            }
            else{
                echo 'Value exists';
            }
        }
        // else{
        //     echo 'Invalid input';
        // }
    }
//}
?>      
<div>
        <h1>Register New User</h1>    
            <form name="myform" action="RegisterMentor.php" onsubmit="return validate()" method="POST">
            <label for="UserID">UserID:</label><br>
            <input  type="text" name="UserID" id="UserID" required placeholder="UserID"><br><br>
            <label for="name">Name:</label><br>
            <input  type="text" name="name" id="name" required placeholder="Username"><br><br>
            <label for="Type">Role(P/T/A):</label><br>
            <input  type="text" name="Type" id="Type" required placeholder="Role"><br><br>
            <label for="password">Password:</label><br>
            <input type="text" name="password" id="password" required placeholder="Password"><br><br>
            <input type="submit" name="submit" id="submit">
            </form>
</div>
</body>
</html>