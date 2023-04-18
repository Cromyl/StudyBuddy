<?php
    $conn=mysqli_connect('localhost','root','','studybuddy') or die("Connection failed" .mysqli_connect_error());
    session_start();
     $temp=$_SESSION["uid"];
     $sql="SELECT * FROM Mentor WHERE Id='$temp'";
     $query=mysqli_query($conn,$sql);
     $row=mysqli_fetch_array($query);
     $name=$row['Name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <title>Admin</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
            <h3 class="navbar-brand" style="font-size:40px; font-weight:bold;">StudyBuddy</h3>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                </div>
            </div>
            <a class="btn btn-primary btn-lg px-3 me-sm-3" href="MentorLogin.php">Log Out</a>
        </nav>
   <section class="py-5 border-bottom">
            <div class="container px-5 my-5 px-5">
                <div class="text-center mb-5">
                    <h1 class="fw-bolder">Welcome <?php echo $name;?>!</h1>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                       
                        <div class="card mb-4">
                            <div class="card-body p-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><i class="bi bi-book-fill" style="font-size:30px; height:3rem; color:#0d6efd"></i></div>
                                    <div class="ms-4">
                                        <p class="mb-1"><a style="color:#1c5cb9; font-size:30px; font-weight:bold; text-decoration:none;" href="DiscussionPage.php">View Discussions</a><br></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-body p-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><i class="bi bi-bell-fill" style="font-size:30px; height:3rem; color:#0d6efd;"></i></div>
                                    <div class="ms-4">
                                        <p class="mb-1"><a style="color:#1c5cb9; font-size:30px; font-weight:bold; text-decoration:none;"  href="Annoucement.php">Announcement</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                       
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><i class="bi bi-file-excel-fill" style="font-size:30px; height:3rem; color:#0d6efd;"></i></div>
                                    <div class="ms-4">
                                        <p class="mb-1"><a style="color:#1c5cb9; font-size:30px; font-weight:bold; text-decoration:none;" href="BanUser.php">Ban User</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
        </section>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>