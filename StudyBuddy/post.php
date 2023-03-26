<?php
 $conn=mysqli_connect('sql12.freesqldatabase.com','sql12608210','fBXhWL98H4','sql12608210') or die("Connection failed" .mysqli_connect_error());
 $id = $_GET['id'];
 $query="SELECT * FROM Doubt WHERE D_Id=$id";
 $result=mysqli_query($conn,$query);
 $row=mysqli_fetch_array($result);
 $query2="SELECT * FROM Solution WHERE Q_Id=$id";
 $result2=mysqli_query($conn,$query2);
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
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="#!">StudyBuddy</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <!-- <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">User Profile</a></li> -->
                        <!-- <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Services</a></li> -->
                        <a href="Annoucement.php"><i style="color:white;font-size: 30px;" class="bi bi-bell"></i></a>
                        
                    </ul>
                </div>
                 </div>
        </nav>
<section class="py-3">
            <div class="container px-5 px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-10">
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
                    <div class="col-lg-10">
                        <div class="card mb-4">
                            <div class="card-body p-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><i class="bi bi-forward-fill" style="color:blue; text-shadow: 2px 2px 2px black; font-size: 50px;"></i></div>
                                    <div class="ms-4">
                                        <p  class="mb-1"><?php echo $row2['Answer']?></p>
                                        <div class="small text-muted"><?php echo "Answered by: "?><?php echo $row2['Answerer']?><?php echo "  "?><?php echo "ID: "?><?php echo $row2['Answerer_id']?></div>
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
    <section class="bg-light py-5">
            <div class="container px-5 my-3 px-5">
                <div class="text-center mb-5">
                    <h2 class="fw-bolder">Upload Your Answer</h2>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-4">
                        <form action="AddToAnswer.php" method="post">
                            <div class="form-floating mb-3">
                                <input class="form-control" type="text" id="Question_id" name="Question_id">
                                <label for="Question_id">Question_id</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" type="text" id="Answer_id" name="Answer_id">
                                <label for="Answer_id">Answer_id</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" type="text" id="Answerer_id" name="Answerer_id">
                                <label for="Answerer_id">Answerer_id</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" type="text" id="Name" name="Name">
                                <label for="Name">Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" type="text" id="Answer" name="Answer">
                                <label for="Answer">Answer</label>
                            </div>
                            <div class="d-grid"><button class="btn btn-primary btn-lg"type="submit" name="submit" id="submit" >Submit</button></div>
                            
                        </form>
                        
                    </div>
                </div>
            </div>
        </section>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
                <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</body>
