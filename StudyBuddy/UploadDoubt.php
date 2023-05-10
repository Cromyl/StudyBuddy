<?php
    //$conn=mysqli_connect('localhost','root','','studybuddy') or die("Connection failed" .mysqli_connect_error());
    include_once('connection.php');
?>
<?php
   session_start();
   $temp=$_SESSION['uid'];
   //print_r($temp);
   $sql="SELECT Semester FROM Student WHERE Rollno='$temp'";
   $query=mysqli_query($conn,$sql);
   $row=mysqli_fetch_array($query);
   //print_r($row);
   $sem=$row[0];
   //print_r($sem);
   if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit']) && isset($_POST['subject']) && isset($_POST['title']) && isset($_POST['desc']))
   {
        $title=$_POST['title'];
        $desc=$_POST['desc'];
        $subject=$_POST['subject'];
        $q="SELECT MAX(D_Id) FROM Doubt";
        $r=mysqli_query($conn,$q);
        $row2=mysqli_fetch_array($r);
       // $newid=print_r($row2[0]+1);
        $newid=$row2[0]+1;
        $query="INSERT INTO Doubt VALUES ('$newid','$temp','$subject','$sem','$desc','$title')";
        $result=mysqli_query($conn,$query);
        echo 'Question Uploded Successfully';
        header("Location: DiscussionPage.php");
   }

//    //echo $sem;
//    $query1="SELECT distinct(Subject) FROM Links WHERE Semester='$sem'";
//    $result=mysqli_query($conn,$query1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Doubt</title>
    
    <script type="text/javascript">
        var semesterObject = {
            "1": { "PHY": [""], "LAL": [""], "ITP": [""], "FEE": [""], "PFC": [""], "POM": [""] },
            "2": { "DMS": [""], "UMC": [""], "COA": [""], "DSA": [""], "PCE": [""], "POE": [""] },
            "3": { "PS": [""], "TOC": [""], "OOM": [""], "OS": [""], "IF": [""], "IM": [""] },
            "4": { "DAA": [""], "PPL": [""], "CN": [""], "SE": [""], "DBMS": [""] },
            "5": { "NS": [""], "GVC": [""], "ML": [""], "IVP": [""], "AI": [""], "MIP1": [""] },
            "6": { "DM": [""], "MIP2": [""] },
            "7": { "MIP3": [""] },
            "8": { "MAP": [""] },
        }
        window.onload = function() {
           // var semesterSel = document.getElementById("semester");
            var subjectSel = document.getElementById("subject");
           // for (var x in semesterObject) {
          //      semesterSel.options[semesterSel.options.length] = new Option(x, x);
           // }
        //    semesterSel.onchange = function() {
                var Sem=<?php echo"$sem"?>;
               // console.log('sds');
               // console.log(Sem);
                document.cookie="semname="+Sem;
                //subjectSel.length = 1;
                for (var y in semesterObject[Sem]) {
                subjectSel.options[subjectSel.options.length] = new Option(y, y);
                }
          //  }
            subjectSel.onchange = function() {
               // console.log("dsdsds");
                var Sub=this.value;
                document.cookie="subname="+Sub;
            }
        }
        function validate() {
            var type = document.forms["myform"]["type"].value;
            if(type=="C"){
                alert("Choose a role first!");
                return false;
            }
        }
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
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

}        </style>


</head>
<body class="area">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="index.php" style="font-size:40px; font-weight:bold;">StudyBuddy</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <!-- <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Services</a></li> -->
                    </ul>
                </div>
            </div>
        </nav>
        <section class="py-5">
            <div class="container px-5 my-5 px-5">
                <div class="text-center mb-5">
                    <form name="myform" action="UploadDoubt.php" onsubmit="return validate()" method="post" enctype="multipart/form-data">
                    <h2 class="fw-bolder" style="color: white">Post Your Doubt</h2>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                            <div class="form-floating mb-3">
                                <select   class="form-select form-control"  name="subject" id="subject">
                                        <option value="" selected="selected"></option>
                                    </select>
                                    <label for="Subject">Subject</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input  class="form-control" type="text" name="title" id="title">
                                <label for="QuestionTitle">Type your Question Title:</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input  class="form-control" type="text" name="desc" id="desc">
                                <label for="Question">Type your Question Description</label>

                            </div>                            
                            <div class="button d-grid"><button class="btn btn-primary btn-lg" name="submit" id="submit" type="submit">Submit</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

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