<?php
     $conn=mysqli_connect('sql12.freesqldatabase.com','sql12608210','fBXhWL98H4','sql12608210') or die("Connection failed" .mysqli_connect_error());
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

        var password = document.forms["myform"]["password"].value;
        var reg=/[^a-zA-Z0-9\!\@\#\$]+/;
        if (reg.test(password)){
            alert("Password should not contain characters other than A-Z/a-z/0-9/!/@/#/$");
            return false;
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
        if(isset($_POST['name'])&& isset($_POST['type']) && isset($_POST['UserID']) && isset($_POST['password'])){
            $UserID=$_POST['UserID'];
            $name=$_POST['name'];
            $type=$_POST['type'];
            $password=$_POST['password'];
            
            $sql="INSERT INTO Mentor VALUES ('$UserID','$name','$type','$password')";
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
    <label for="type">Role:</label><br>
    <select name="type" id="type">
        <option value="A">Admin</option>
        <option value="P">Professor</option>
        <option value="T">Teaching Assistant</option>
    </select><br><br>
    <label for="password">Password:</label><br>
    <input type="password" name="password" id="password" required placeholder="Password"><br><br>
    <input type="submit" name="submit" id="submit">
    </form>
</div>
</body>
</html>