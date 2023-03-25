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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>
<body>
<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $id=$_POST['ID'];
        $password=$_POST['password'];
       

      $sql="SELECT count(*) FROM Student WHERE Rollno='$id' AND Password='$password'";
      $sql2="SELECT * FROM Student WHERE Rollno='$id' AND password='$password'";
        
        $query=mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($query);

        $query2=mysqli_query($conn,$sql2);
        $row2=mysqli_fetch_array($query2);
        //print_r($row);
      

        if($row[0]==1)
        {
        // Register $username, $password and redirect to file "login_success.php"
            session_start();
            $karo=print_r($row2[0],true);
            $_SESSION["uid"] = $karo;
            header("location:HomePage.php");
        }
        else {
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Incorrect Details !!</strong> Please check User-ID and Password.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
    }
?>
    <div style="margin-top:100px ">
        <h1>Login</h1>   
        <form action="UserLogin.php" method="POST">
            <div class="mb-3" style="margin-bottom: -2rem!important">
                <label for="name"  class="form-label">User ID</label><br>
                <input class="form-control" type="text" name="ID" id="ID" required placeholder="ID"><br><br>
        
            </div>
            <div class="mb-3"style="margin-bottom: -2rem!important">
        
                <label for="password"class="form-label">Password</label><br>
                <input class="form-control" type="password" name="password" id="password" required placeholder="Password"><br><br>
                
            </div>
            
              <input class="btn btn-primary" type="submit" name="submit" id="submit">
              
        </form>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
 
</body>
</html>
