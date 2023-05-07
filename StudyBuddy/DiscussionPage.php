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





        </style>



</head>

<body class="area">


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
            <a class="btn btn-primary btn-lg px-4 me-sm-3" href="UploadDoubt.php" style="width: 300px">Upload Your Question</a>
        </nav>
        <section class="py-5 " style="height:max-height;">
            <div class="container px-5 my-5 px-5">
                <div class="text-center mb-5">
                    <h1 style="color: white; font-weight:bold;">Discussion Page</h1>
                   
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
                    echo "<button  class=\"btn btn-primary btn-lg \"><a class=\"text-decoration-none\" style=\"color:white\" href=post.php?id=$id>Answer</a></button>";
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

