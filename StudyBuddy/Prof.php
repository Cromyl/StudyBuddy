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
    <title>Professor</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles.css">
    <style>
            @import url('https://fonts.googleapis.com/css?family=Exo:400,700');

*{
    margin: 0px;
    padding: 0px;
}

body{
    font-family: 'Exo', sans-serif;
    z-index: -2;
}


.context {
    width: 100%;
    position: absolute;
    top:50vh;
    
}

.context h1{
    text-align: center;
    color: #fff;
    font-size: 50px;
}


.area{
    background: #4e54c8;  
    background: -webkit-linear-gradient(to left, #8f94fb, #4e54c8);  
    width: 100%;
    height:100%;
    z-index: -2;
   
}

.circles{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: overflow-y;
    z-index: 0;
}

.circles li{
    position: absolute;
    display: block;
    list-style: none;
    width: 20px;
    height: 20px;
    background: rgba(255, 255, 255, 0.2);
    animation: animate 25s linear infinite;
    bottom: -150px;
    
}

.circles li:nth-child(1){
    left: 25%;
    width: 80px;
    height: 80px;
    animation-delay: 0s;
}


.circles li:nth-child(2){
    left: 10%;
    width: 20px;
    height: 20px;
    animation-delay: 2s;
    animation-duration: 12s;
}

.circles li:nth-child(3){
    left: 70%;
    width: 20px;
    height: 20px;
    animation-delay: 4s;
}

.circles li:nth-child(4){
    left: 40%;
    width: 60px;
    height: 60px;
    animation-delay: 0s;
    animation-duration: 18s;
}

.circles li:nth-child(5){
    left: 65%;
    width: 20px;
    height: 20px;
    animation-delay: 0s;
}

.circles li:nth-child(6){
    left: 75%;
    width: 110px;
    height: 110px;
    animation-delay: 3s;
}

.circles li:nth-child(7){
    left: 35%;
    width: 150px;
    height: 150px;
    animation-delay: 7s;
}

.circles li:nth-child(8){
    left: 50%;
    width: 25px;
    height: 25px;
    animation-delay: 15s;
    animation-duration: 45s;
}

.circles li:nth-child(9){
    left: 20%;
    width: 15px;
    height: 15px;
    animation-delay: 2s;
    animation-duration: 35s;
}

.circles li:nth-child(10){
    left: 85%;
    width: 150px;
    height: 150px;
    animation-delay: 0s;
    animation-duration: 11s;
}
.card{
    z-index: 2;
}

.navbar{
    z-index: 2;
}
.card{
                box-shadow: 0 0 20px 2px rgba(0,0,0,.1);
                transition:0.7s;
            }
            .card:hover{
                transform:scale(1.1);
                z-index:2;
            }
.section{
    z-index: 2;
}
.form{
    z-index: 2;
}
.form-floating{
    z-index: 2;
}
.btn{
    z-index: 2;
}
.d-grid{
    z-index: 2;
}

@keyframes animate {

    0%{
        transform: translateY(0) rotate(0deg);
        opacity: 1;
        border-radius: 0;
    }

    100%{
        transform: translateY(-1000px) rotate(720deg);
        opacity: 0;
        border-radius: 50%;
    }

}  

.feedback {
  background-color : #31B0D5;
  color: white;
  padding: 10px 20px;
  border-radius: 40px;
  height: 70px;
  width:120px;
  border-color: #46b8da;
}

#mybutton {
  position: fixed;
  bottom: 20px;
  right: 20px;
  
}

</style>

</head>
<body class="area">
<div id="mybutton">
<a class="btn btn-primary feedback" title="FeedBack!!" target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSf78As84oPvKLblXmbVc1_br7xpA2J_J_vPJgqt410rIGNk_Q/viewform?usp=sf_link" ><i class="bi bi-chat-square-dots-fill"></i><br>FeedBack</a>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
            <h3 class="navbar-brand" style="font-size:40px; font-weight:bold;">StudyBuddy</h3>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                </div>
            </div>
            <a class="btn btn-primary btn-lg px-3 me-sm-3" href="home.php">Log Out</a>
        </nav>
   <section class="py-5 "style="height:max-height;" >
            <div class="container px-5 my-5 px-5">
                <div class="text-center mb-5">
                    <h1 class="fw-bolder" style="color: white">Welcome <?php echo $name;?>!</h1>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                        
                        <div class="card mb-4">
                            <div class="card-body p-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><i class="bi bi-book-fill" style="font-size:30px; height:3rem; color:#0d6efd"></i></div>
                                    <div class="ms-4">
                                        <p class="mb-1"><a style="color:#1c5cb9; font-size:30px; font-weight:bold; text-decoration:none;" href="MentorDiscuss.php">View Discussions</a><br></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-body p-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><i class="bi bi-bell-fill" style="font-size:30px; height:3rem; color:#0d6efd;"></i></div>
                                    <div class="ms-4">
                                        <p class="mb-1"><a style="color:#1c5cb9; font-size:30px; font-weight:bold; text-decoration:none;"  href="MentorAnnounce.php">Announcement</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
<!-- 
                        <div class="card mb-4">
                            <div class="card-body p-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><i class="bi bi-file-excel-fill" style="font-size:30px; height:3rem; color:#0d6efd;"></i></div>
                                    <div class="ms-4">
                                        <p class="mb-1"> <a style="color:#1c5cb9; font-size:30px; font-weight:bold; text-decoration:none;" href="DeleteDiscussion.php">Delete Discussion</a><br></p>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                       
                        <div class="card mb-4">
                            <div class="card-body p-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><i class="bi bi-cloud-arrow-up-fill" style="font-size:30px; height:3rem; color:#0d6efd;"></i></div>
                                    <div class="ms-4">
                                        <p class="mb-1"><a style="color:#1c5cb9; font-size:30px; font-weight:bold; text-decoration:none;" href="UploadMaterial.php">Upload Material</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-body p-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><i class="bi bi-chat-text" style="font-size:30px; height:3rem; color:#0d6efd;"></i></div>
                                    <div class="ms-4">
                                        <p class="mb-1"><a style="color:#1c5cb9; font-size:30px; font-weight:bold; text-decoration:none;" href="/StudyBuddy/StudyBuddy/chat3/users.php">Interact With Students</a></p>
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
<ul class="circles" >
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
            </ul>
</html>