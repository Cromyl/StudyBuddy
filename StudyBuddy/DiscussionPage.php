<?php
    $conn=mysqli_connect('localhost','root','','studybuddy') or die("Connection failed" .mysqli_connect_error());
     $query="SELECT * FROM Doubt";
     $result=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discussion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
    <link href="styles.css" rel="stylesheet" />
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="#!"style="font-size:40px; font-weight:bold;">StudyBuddy</a>
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
            <a class="btn btn-primary btn-lg px-4 me-sm-3" href="UploadDoubt.php">Upload Your Question</a>
        </nav>
        <section class="py-5 border-bottom">
            <div class="container px-5 my-5 px-5">
                <div class="text-center mb-5">
                    <h1>Discussion Page</h1>
                   
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8">
            <?php
                while($row=mysqli_fetch_assoc($result)){
                ?>
            <div class="card mb-4">
                    <div class="card-body p-4">
                        <div class="d-flex">
                            </div>
                            <div class="ms-4">
                            <p class="mb-1">  
                    <h4><?php echo $row['D_Id'];?><?php echo ". "?><?php echo $row['Doubt'];?></h4>                                  
                    <?php echo "Subject: ";
                        echo $row['Subject'];?><br>
                    <?php echo "Semester: ";
                        echo $row['Semester'];?><br>
                    <?php echo "Doubt Name: ";
                        echo $row['D_Name'];?><br>
                    <p>
                    
                    </p>
                    
                    <?php
                    $id=$row['D_Id'];
                    echo "<button class=\"btn btn-primary btn-lg \"><a class=\"text-decoration-none\" style=\"color:white\" href=post.php?id=$id>Answer</a></button>";
                    ?>
                
        
                                    </p>
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
        <!-- <a href=post.php?id=$id>Answer</a> -->



        <table style="width:100%">
        
            
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
      <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</body>
</html>