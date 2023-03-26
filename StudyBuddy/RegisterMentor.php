<?php
     $conn=mysqli_connect('sql12.freesqldatabase.com','sql12608210','fBXhWL98H4','sql12608210') or die("Connection failed" .mysqli_connect_error());
?>
<!DOCTYPE html>
<html lang="en">
<head>
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
        if(($Type=='P' || $Type=='A' || $Type=='T' )&& ctype_alpha($name)==true){
            $sql="INSERT INTO Mentor VALUES ('$UserID','$name','$Type','$password')";
            $query =mysqli_query($conn,$sql);
            if($query){
                
                header("Location: MentorLogin.php");
            }
            else{
                echo 'Value exists';
            }
        }
        else{
            echo 'Invalid input';
        }
    }
}
?>      
<div>
        <h1>Register New User</h1>    
            <form action="RegisterMentor.php" method="POST">
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