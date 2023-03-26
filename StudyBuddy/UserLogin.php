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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="styles.css" rel="stylesheet" />

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="#!">StudyBuddy</a>
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
    <section class="bg-light py-5">
        <div class="container px-5 my-5 px-5">
            <div class="text-center mb-5">
              <h2 class="fw-bolder">LOGIN</h2><br><br>

                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-4">
                        <form action="UserLogin.php" method="POST">
                            <div class="mb-3 form-floating" >
                                <input class="form-control" type="text" name="ID" id="ID" required placeholder="ID">
                                <label for="name"  class="form-label">User ID</label>
                        
                            </div>
                            <div class="mb-3 form-floating">                        
                                <input class="form-control" type="password" name="password" id="password" required placeholder="Password">
                                <label for="password"class="form-label">Password</label>
                                
                            </div>
                            <br>
                            <div class="d-grid">
                                <input class="btn btn-primary btn-lg disabled" type="submit" name="submit" id="submit">
                            </div>
                              
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
 
</body>
  
</html>
