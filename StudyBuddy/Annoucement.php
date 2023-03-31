<?php
    session_start();
    $conn=mysqli_connect('sql12.freesqldatabase.com','sql12610063','nDGjwWyFIG','sql12610063') or die("Connection failed" .mysqli_connect_error());
     $id=$_SESSION['uid'];
     //echo gettype($id);
     $q="SELECT Semester FROM Student WHERE Rollno='$id'";
     $r=mysqli_query($conn,$q);
     $r=mysqli_fetch_assoc($r)['Semester'];
     //echo $r;
     $r=intval($r);
     //echo gettype($r);
     $query="SELECT * FROM Announcement where Semester='$r' order by PostDate DESC,PostTime DESC";
     $result=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="styles.css" rel="stylesheet" />
    <title>Announcement</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="#!">Welcome!!</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <!-- <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">User Profile</a></li> -->
                        <!-- <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Services</a></li> -->
                    </ul>
                </div>
            </div>
        </nav>
<section class="py-5 border-bottom">
    <div class="container px-5 my-5 px-5">
        <div class="text-center mb-5">
            <h1>Announcements</h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8">
            <?php
                while($row=mysqli_fetch_assoc($result)){
                ?>
                <div class="card mb-4">
                    <div class="card-body p-4">
                        <div class="d-flex">
                            <div class="ms-4">
                            
                                   
                          
                            <div class="d-flex flex-row">
                            <div class="p-2"><i class="bi bi-chat-right-quote-fill text-primary fs-1"></i></div>
                            <div class="p-2" style="margin-top: 0.7rem"><h5 class="mb-1"><?php echo $row['Post'];?> </h5></div>
                            
                            </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                 <?php
                }
            ?>

            </div>
        </div>
    </div>
</section>

        <br>
            
                
                
        
               
        <br>
        <table style="width:100%">
        
            
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

    
</body>
</html>