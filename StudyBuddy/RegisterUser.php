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
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
        if(isset($_POST['name'])&& isset($_POST['Roll_Number']) && isset($_POST['Semester']) && isset($_POST['password'])){
        $name=$_POST['name'];
        $rollnumber=$_POST['Roll_Number'];
        $semester=$_POST['Semester'];
        $password=$_POST['password'];
        if($semester <= 8 && ctype_alpha($name)==true){
            $sql="INSERT INTO  Student VALUES ('$rollnumber','$name','$semester','$password')";
            $query =mysqli_query($conn,$sql);
            if($query){
                
                header("Location: UserLogin.php");
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
        <h1>Register New User</h1>    
        <form action="RegisterUser.php" method="POST">
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