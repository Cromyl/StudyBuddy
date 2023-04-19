<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <title>Admin</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="bg-img" style="height: max-height;
  background-image: url(img3.jpg);
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
            <h1 class="navbar-brand" style="font-size:40px; font-weight:bold;">StudyBuddy</h1>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                </div>
            </div>
        </nav>
   <section class="py-5 border-bottom">
            <div class="container px-5 my-5 px-5">
                <div class="text-center mb-5">
                    <h1 class="fw-bolder">Select Your Role</h1>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                       
                        <div class="card mb-4">
                            <div class="card-body p-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><i class="bi bi-book-fill" style="font-size:30px; height:3rem; color:#0d6efd"></i></div>
                                    <div class="ms-4">
                                        <h4 class="mb-1" style="color:#1c5cb9; font-size:30px; font-weight:bold; text-decoration:none;">Student</h4><br>
                                        <a class="btn btn-primary btn-lg px-3 me-sm-3" href="UserLogin.php">LogIn</a>
                                        <a class="btn btn-primary btn-lg px-3 me-sm-3" href="RegisterUser.php">SignUp</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><i class="bi bi-award-fill" style="font-size:30px; height:3rem; color:#0d6efd;"></i></div>
                                    <div class="ms-4">
                                        <h4 class="mb-1"  style="color:#1c5cb9; font-size:30px; font-weight:bold; text-decoration:none;">Mentor</h4><br>
                                        <a class="btn btn-primary btn-lg px-3 me-sm-3" href="MentorLogin.php">LogIn</a>
                                        <a class="btn btn-primary btn-lg px-3 me-sm-3" href="RegisterMentor.php">SignUp</a>
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