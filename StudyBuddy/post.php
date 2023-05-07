<?php
    $conn=mysqli_connect('localhost','root','','studybuddy') or die("Connection failed" .mysqli_connect_error());
    $id = $_GET['id'];
    $query="SELECT * FROM Doubt WHERE D_Id=$id";
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_array($result);
    $query2="SELECT * FROM Solution WHERE Q_Id=$id ORDER BY Ans_no";
    $result2=mysqli_query($conn,$query2);
    $query6="SELECT count(*) FROM Solution WHERE Q_Id=$id";
    $result6=mysqli_query($conn,$query6);
    $row6=mysqli_fetch_array($result6);

    $query5="SELECT * FROM Solution WHERE Q_Id=$id ORDER BY Ans_no DESC";
    $result5=mysqli_query($conn,$query5);
    $row5=mysqli_fetch_array($result5);

    if($row6[0]>0){
        $max=$row5[1]; $max++;
    }
    else{
        $max=1;
    }
    
    
    session_start();
    $temp=$_SESSION['uid'];
    $sql3="SELECT * FROM Student WHERE Rollno='$temp'";
    $query3=mysqli_query($conn,$sql3);
    $row3=mysqli_fetch_array($query3);
    
    $sql7="SELECT count(*) FROM Student WHERE Rollno='$temp'";
    $query7=mysqli_query($conn,$sql7);
    $row7=mysqli_fetch_array($query7);
    


    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['verify_answer'])) {
        $ans_id = $_POST['ans_id'];
        $sql8 = "SELECT * FROM mentor WHERE Id='$temp'";
        $query8 = mysqli_query($conn, $sql8);
        $row8 = mysqli_fetch_array($query8);
        if($row8[2]=='P'){
          $sql = "UPDATE solution SET ProfUID='$temp' WHERE Ans_no='$ans_id' AND Q_no='$id'";
          mysqli_query($conn, $sql);
        } else {
          $sql = "UPDATE solution SET TaUID='$temp' WHERE Ans_no='$ans_id' AND Q_no='$id'";
          mysqli_query($conn, $sql);
        }
        header("Location: post.php?id=$id");
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['disverify_answer'])) {
        $ans_id = $_POST['ans_id'];
        $sql = "UPDATE solution SET ProfUID=NULL WHERE Ans_no='$ans_id' AND Q_no='$id'";
        mysqli_query($conn, $sql);
        $sql = "UPDATE solution SET TaUID=NULL WHERE Ans_no='$ans_id' AND Q_no='$id'";
        mysqli_query($conn, $sql);
        header("Location: post.php?id=$id");
    }

    if($row7[0]==0){
        $sql8="SELECT * FROM mentor WHERE Id='$temp'";
        $query8=mysqli_query($conn,$sql8);
        $row8=mysqli_fetch_array($query8);
    }
      
    

    if((isset($_POST['Answer']))){
        if($row7[0]==1){
            $Answer=$_POST['Answer'];
            $Ans_no=$max;
            // $Answer_id=$_POST['Answer_id'];
            $Answerer_id=$row3[0];
            $Name=$row3[1];
            $Question_id=$id;
            $Answer_id=$Question_id.'_'.$Ans_no;

            $sql="INSERT INTO Solution VALUES ('$Answer_id','$Ans_no','$Question_id','$Answerer_id','$Name','$Answer',NULL,NULL)";

            $query4 =mysqli_query($conn,$sql);
            if($query4){
                header("Location: post.php?id=$id");
            }
            else{
                echo 'Value exists';
            }
        }
        else{

            $Answer=$_POST['Answer'];
            $Ans_no=$max;
            $Answerer_id=$row8[0];
            $Name=$row8[1];
            $Question_id=$id;
            $Answer_id=$Question_id.'_'.$Ans_no;

            if($row8[2]=='P'){
                $sql="INSERT INTO Solution VALUES ('$Answer_id','$Ans_no','$Question_id','$Answerer_id','$Name','$Answer',NULL,'$temp')";
                $query4 =mysqli_query($conn,$sql);
            }
            else{
                $sql="INSERT INTO Solution VALUES ('$Answer_id','$Ans_no','$Question_id','$Answerer_id','$Name','$Answer','$temp',NULL)";
                $query4 =mysqli_query($conn,$sql);
            }
            if($query4){
                header("Location: post.php?id=$id");
            }
            else{
                echo 'Value exists';
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
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

}

        </style>

</head>
<body class="area" >
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="index.php" style="font-size: 40px"><b>StudyBuddy</b></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <!-- <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">User Profile</a></li> -->
                        <!-- <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Services</a></li> -->
                        <!-- <a href="Annoucement.php"><i style="color:white;font-size: 30px;" class="bi bi-bell"></i></a> -->
                        
                    </ul>
                </div>
                 </div>
        </nav>
<section class="py-3">
            <div class="container px-5 px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-7">
                        <div class="card mb-4">
                            <div class="card-body p-4">
                                <div class="d-flex">
                                    <div  style="font-size:30px; height:3rem;"class="feature bg-primary bg-gradient text-white rounded-3 mb-3 flex-shrink-0"><i class="bi bi-envelope"></i></div>
                                    <div class="ms-4">
                                        <h4 class="mb-1"><?php echo $row['D_Id'];?> <?php echo $row['Doubt'];?></h4>
                                        <div class="small text-muted"><?php echo "Subject: "?><?php echo $row['Subject'];?><?php echo "  "?><?php echo "Semester: "?><?php echo $row['Semester'];?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>    
        <?php
        while($row2=mysqli_fetch_assoc($result2)){
        ?>
        <section class="py-1">
            <div class="container px-5 px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-7">
                        <div class="card mb-4">
                            <div class="card-body p-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><i class="bi bi-forward-fill" style="color:blue; text-shadow: 2px 2px 2px black; font-size: 50px;"></i></div>
                                    <div class="ms-4">
                                        <p class="mb-1"><?php echo $row2['Answer']?></p>
                                        <div class="small text-muted"><?php echo "Answered by: "?><?php echo $row2['Answerer']?><?php echo "  "?><?php echo "ID: "?><?php echo $row2['Answerer_id']?></div>
                                        <?php if (!empty($row2['Verifiedby'])) { ?>
                                            <div class="small text-muted"><?php echo "Verified by: "?><?php echo $row2['Verifiedby']?><?php echo "  "?><?php echo "ID: "?><?php echo $row2['Verifier_id']?></div>
                                        <?php } ?>
                                    </div>
                                </div>

                                <div class="d-flex flex-column">
                                    <?php if ($row2['ProfUID'] != NULL): ?>
                                        <div class="mt-2">
                                            <!-- <i class="bi bi-x-circle-fill text-danger" style="font-size: 1.5rem;"></i> -->

                                            <i class="bi bi-check2-circle text-success me-2" style="font-size: 1.5rem;"></i>
                                            <span class="text-muted small"><?php echo "Verified by: " . $row2['ProfUID'];
                                                $temp=$row2['ProfUID'];
                                                $sql10="SELECT * FROM mentor WHERE Id='$temp'";
                                                $query10=mysqli_query($conn,$sql10);
                                                $row10=mysqli_fetch_array($query10);
                                                $name=$row10['Name'];
                                                echo " (" . $name . ")"; ?>
                                                <!-- <i class="bi bi-x-circle-fill text-danger" style="font-size: 1.5rem;"></i> -->
                                                <?php if($row7[0]==0){ ?>
                                                    <form id="disverify-form-<?php echo $row2['Ans_no'] ?>" action="post.php?id=<?php echo $id ?>" method="post">
                                                        <input type="hidden" name="ans_id" value="<?php echo $row2['Ans_no'] ?>">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="disverify_answer" id="disverify_answer_<?php echo $row2['Ans_no'] ?>">
                                                            <label class="form-check-label" for="disverify_answer_<?php echo $row2['Ans_no'] ?>">
                                                                Unverify
                                                            </label>
                                                        </div>
                                                    </form>
                                                <?php
                                                }
                                            ?></span>
                                        </div>
                                        <script>
                                            document.getElementById('disverify_answer_<?php echo $row2['Ans_no'] ?>').addEventListener('click', function() {
                                                if (confirm('Are you sure you want to disverify this answer?')) {
                                                    document.getElementById('disverify-form-<?php echo $row2['Ans_no'] ?>').submit();
                                                }
                                            });
                                        </script>
                                    <?php else: ?>
                                        <?php if ($row7[0]==0 && $row8[2]=='P'): ?>
                                            <div class="mt-2">
                                                <form id="verify-form-<?php echo $row2['Ans_no'] ?>" action="post.php?id=<?php echo $id ?>" method="post">
                                                    <input type="hidden" name="ans_id" value="<?php echo $row2['Ans_no'] ?>">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="verify_answer" id="verify_answer_<?php echo $row2['Ans_no'] ?>">
                                                        <label class="form-check-label" for="verify_answer_<?php echo $row2['Ans_no'] ?>">
                                                            Verify Answer
                                                        </label>
                                                    </div>
                                                </form>
                                            </div>
                                            <script>
                                                document.getElementById('verify_answer_<?php echo $row2['Ans_no'] ?>').addEventListener('click', function() {
                                                    if (confirm('Are you sure you want to verify this answer?')) {
                                                        document.getElementById('verify-form-<?php echo $row2['Ans_no'] ?>').submit();
                                                    }
                                                });
                                            </script>
                                        <?php endif; ?>
                                        <?php if ($row2['TaUID'] != NULL): ?>
                                            <div class="mt-2">
                                                <i class="bi bi-check2-circle text-info me-2" style="font-size: 1.5rem;"></i>
                                                <span class="text-muted small"><?php echo "Verified by: ". $row2['TaUID'];
                                                        $temp=$row2['TaUID'];
                                                        $sql10="SELECT * FROM mentor WHERE Id='$temp'";
                                                        $query10=mysqli_query($conn,$sql10);
                                                        $row10=mysqli_fetch_array($query10);
                                                        $name=$row10['Name'];
                                                        echo " (" . $name . ")"; ?>
                                                        <?php if($row7[0]==0){ ?>
                                                            <form id="disverify-form-<?php echo $row2['Ans_no'] ?>" action="post.php?id=<?php echo $id ?>" method="post">
                                                                <input type="hidden" name="ans_id" value="<?php echo $row2['Ans_no'] ?>">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" name="disverify_answer" id="disverify_answer_<?php echo $row2['Ans_no'] ?>">
                                                                    <label class="form-check-label" for="disverify_answer_<?php echo $row2['Ans_no'] ?>">
                                                                        Unverify
                                                                    </label>
                                                                </div>
                                                            </form>
                                                        <?php
                                                        }
                                                
                                                ?></span>
                                            </div>
                                        <?php elseif($row7[0]==0 && $row8[2]=='T'): ?>

                                            <div class="mt-2">
                                                <form id="verify-form-<?php echo $row2['Ans_no'] ?>" action="post.php?id=<?php echo $id ?>" method="post">
                                                    <input type="hidden" name="ans_id" value="<?php echo $row2['Ans_no'] ?>">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="verify_answer" id="verify_answer_<?php echo $row2['Ans_no'] ?>">
                                                        <label class="form-check-label" for="verify_answer_<?php echo $row2['Ans_no'] ?>">
                                                            Verify Answer
                                                        </label>
                                                    </div>
                                                </form>
                                            </div>


                                            <script>
                                                document.getElementById('verify_answer_<?php echo $row2['Ans_no'] ?>').addEventListener('click', function() {
                                                    if (confirm('Are you sure you want to verify this answer?')) {
                                                        document.getElementById('verify-form-<?php echo $row2['Ans_no'] ?>').submit();
                                                    }
                                                });
                                            </script>
                                            <!-- <div class="mt-2">
                                                <form method="post">
                                                    <input type="hidden" name="ans_id" value="<?php echo $temp ?>">
                                                    <button type="submit" class="btn btn-primary">Verify Answer</button>
                                                </form>
                                            </div> -->
                                        <?php endif; ?>
                                    <?php endif; ?>

                                </div>




                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </section>
        <?php
        }?>
    </div>
    <section class="py-5">
            <div class="container px-5 my-3 px-5">
                <div class="text-center mb-5">
                    <h2 class="fw-bolder" style="color: white">Upload Your Answer</h2>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-4">
                        <form action="post.php?id=<?php echo "$id" ?>" method="post">
                            <div class="form-floating mb-3">
                                <input class="form-control" type="text" id="Answer" name="Answer" required>
                                <label for="Answer">Add an Answer</label>
                            </div>
                            <div class="d-grid"><button class="btn btn-primary btn-lg"type="submit" name="submit" id="submit" >Submit</button></div>
                            
                        </form>
                        
                    </div>
                </div>
            </div>
        </section>

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




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
                <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</body>
