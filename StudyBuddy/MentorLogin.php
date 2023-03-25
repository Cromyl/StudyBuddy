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
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $id=$_POST['ID'];
        $password=$_POST['password'];
       

      $sql="SELECT count(*) FROM Mentor WHERE Id='$id' AND Password='$password'";
      $sql2="SELECT * FROM Mentor WHERE Id='$id' AND password='$password'";
        
        $query=mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($query);

        $query2=mysqli_query($conn,$sql2);
        $row2=mysqli_fetch_array($query2);
        //print_r($row);
      

        if($row[0]==1 && $row2["Type"]=='P')
        {
        // Register $username, $password and redirect to file "login_success.php"
            session_start();
            $karo=print_r($row2[0],true);
            $_SESSION["uid"] = $karo;
            header("location:Prof.php");
        }
        else if($row[0]==1 && $row2["Type"]=='A'){
            session_start();
            $karo=print_r($row2[0],true);
            $_SESSION["uid"] = $karo;
            header("location:Admin.php");
        }
        else {
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Incorrect Details !!</strong> Please check User-ID and Password.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
    }
?>
        <h1>Login</h1>    
        <form action="" method="POST">
            <label for="name">ID</label><br>
            <input  type="text" name="ID" id="ID" required placeholder="ID"><br><br>
            <label for="password">Password:</label><br>
            <input type="text" name="password" id="password" required placeholder="Password"><br><br>
    
            <input type="submit" name="submit" id="submit">
        </form>
    </div>
</body>
</html>