<?php
    //$conn=mysqli_connect('localhost','root','','studybuddy') or die("Connection failed" .mysqli_connect_error());
    include_once('connection.php');
    session_start();
    $temp=$_SESSION['uid'];
    $sql="SELECT * FROM Student WHERE Rollno='$temp'";
    $query=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($query);
    $query2="SELECT * FROM Doubt WHERE Poster_id='$temp'";
    $result2=mysqli_query($conn,$query2);
    $rollno=$row['Rollno'];
    $sem=$row['Semester'];
    $name=$row['Name'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Profile</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- <script>
        // Example: Set selected semester to 6
var selectedSemester = 6;

// Find the <select> element by its ID
var semesterDropdown = document.getElementById("semester-dropdown");

// Loop through each <option> element to find the desired semester
for (var i = 0; i < semesterDropdown.options.length; i++) {
  if (semesterDropdown.options[i].value == selectedSemester) {
    semesterDropdown.selectedIndex = i; // Set the selected index to match the desired semester
    break; // Exit the loop once the desired semester is found
  }
}
    </script> -->

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
.input{
    z-index: 2;
}
.form-control{
    z-index: 2;
}
#uploadfile{
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
    </style>


    <style>
    .card2 {
        box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.5);
        border-radius: 40px;
    }
.card{
    box-shadow: 0 0 20px 2px rgba(0,0,0,.1);
    transition:0.7s;
}
.card:hover{
    transform:scale(1.1);
    z-index:2;
}
</style>

</head>
<body class="area">
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

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="index.php">StudyBuddy</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                          </ul>
                </div>
            </div>
        </nav>
<?php
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit2'])){
        
        session_destroy();
        ?>
        <script type="text/javascript">
        window.location.href = 'home.php';
        </script>
        <?php
    }
 ?>
<?php
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
        if(isset($_POST['name'])){
            $name=$_POST['name'];
            if($name!=""){
                $sql="UPDATE student SET Name='$name' WHERE Rollno='$temp'";
                $query=mysqli_query($conn,$sql);
            }
        }
        if(isset($_POST['sem'])){
            $sem=$_POST['sem'];
            if($sem==1 ||$sem==2 ||$sem==3 ||$sem==4 ||$sem==5 ||$sem==6 ||$sem==7 ||$sem==8){
                $sql="UPDATE student SET Semester='$sem' WHERE Rollno='$temp'";
                $query=mysqli_query($conn,$sql);
            }
        }
        ?>
            <script type="text/javascript">
        window.location.href = 'UserProfile.php';
        </script>
        <?php
        
    }
?>


<div>
        
        <br>
        <div class="card card2 text-center mx-auto" style="width: 28rem;">
            <div class="card-body">
                <h1>Student Profile</h1>
                <p>Name: <?php echo $name?></p>
                <p>Roll Number: <?php echo $rollno?></p>
                <p>Semester: <?php echo $sem?></p>

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Edit Profile
                </button>
                <br><br>
                <form action="UserProfile.php" method="POST">
                    <button type="submit" class="btn btn-secondary" id="submit2" name="submit2">Log Out</button>
                </form>
            </div>
        </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="UserProfile.php" method="POST">
          <div class="form-group">
            <label for="item-name" class="col-form-label">Enter New Name:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter new Name">
          </div>
          <div class="form-group">
            <!-- <label for="item-description" class="col-form-label">Choose Semester:</label> -->
            <div class="form-group">
  <label for="semester-dropdown" class="col-form-label">Choose Semester:</label>
  <select class="form-control" id="sem" name="sem">
    <option value="Choose"> Choose Semester </option>
    <option value="1" >Semester 1</option>
    <option value="2" >Semester 2</option>
    <option value="3" >Semester 3</option>
    <option value="4" >Semester 4</option>
    <option value="5" >Semester 5</option>
    <option value="6" >Semester 6</option>
    <option value="7" >Semester 7</option>
    <option value="8" >Semester 8</option>
  </select>
</div>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="submit" id="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>


<section class="py-5 border-bottom">
            <div class="container px-5 my-5 px-5">
                <div class="text-center mb-5">
                    <h3 style="color: white">Questions Asked....</h3>
                   
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8">
            <?php
                while($row=mysqli_fetch_assoc($result2)){
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
                    echo "<button class=\"btn btn-primary btn-lg \"><a class=\"text-decoration-none\" style=\"color:white\" href=post.php?id=$id>Show Discussion</a></button>";
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
    <!-- Bootstrap JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
