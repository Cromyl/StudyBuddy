<?php
    $conn=mysqli_connect('localhost','root','','studybuddy') or die("Connection failed" .mysqli_connect_error());
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="styles.css" rel="stylesheet" />
  </head>
<body class="bg-img" style="height: max-height;
  background-image: url(img3.jpg);
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="#!"style="font-size:40px; font-weight:bold;">StudyBuddy</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                          </ul>
                </div>
            </div>
        </nav>
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
      

        if($row[0]==1 && $row2['Type']=='P')
        {
        // Register $username, $password and redirect to file "login_success.php"
            session_start();
            $karo=print_r($row2[0],true);
            $_SESSION["uid"] = $karo;
            header("location:Prof.php");
        }
        else if($row[0]==1 && $row2['Type']=='A'){
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
<section class=" py-5">
  <div class="container px-5 my-5 px-5">
    <div class="text-center mb-5">
      <h1>LOGIN</h1>    
    </div>
    <div class="row gx-5 justify-content-center">
      <div class="col-lg-4">
        <form action="" method="POST">
          <div class="form-floating mb-3">
            <input class="form-control" type="text" name="ID" id="ID" required placeholder="ID"><br>
            <label for="name">ID</label><br>
          </div>
          <div class="form-floating mb-3">
            <input class="form-control" type="password" name="password" id="password" required placeholder="Password"><br>
            <label for="password">Password:</label><br>
          </div>
          <div class="d-grid">
             <input class="btn btn-primary btn-lg" type="submit" name="submit" id="submit">
            </div>
                              
        </form>

      </div>
    </div>
  </div>
</section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>


</body>
</html>