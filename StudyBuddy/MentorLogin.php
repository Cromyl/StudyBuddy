<?php
     $conn=mysqli_connect('sql12.freesqldatabase.com','sql12608210','fBXhWL98H4','sql12608210') or die("Connection failed" .mysqli_connect_error());
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>