<?php 
    $conn=mysqli_connect('localhost','root','','studybuddy') or die("Connection failed" .mysqli_connect_error());
session_start();
$temp=$_SESSION['uid'];
   $sql="SELECT Semester FROM Student WHERE Rollno='$temp'";
   $query=mysqli_query($conn,$sql);
   $row=mysqli_fetch_array($query);
   $sem=$row[0];
$subject=$_COOKIE['subname'];
$type=$_POST['type'];

$path='material/'.'sem'.$sem.'/'.$subject.'/'.$type;
$scan = scandir($path);
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Material</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
<link href="styles.css" rel="stylesheet" />
</head>
<body>
<section class="py-5 border-bottom">
            <div class="container px-5 my-5 px-5">
                <div class="text-center mb-5">
                    <h1 class="fw-bolder"><?php echo $subject?></h1>
                </div>
                <div class="row gx-5 justify-content-center">
                   <?php
                   foreach($scan as $file) {
                      if (!is_dir("myFolder/$file")) {
                         if($file=='ignore.txt') continue;
                         else{
                            $msg=explode('.',$file)[1];
                            $fin=$path.'/'.$file;
                            ?>
                            <div class="col-lg-6">                       
                                <div class="card mb-4">
                                    <div class="card-body p-4">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0"><i class="bi bi-book-fill" style="font-size:30px; height:3rem; color:#0d6efd"></i></div>
                                            <div class="ms-4">
                                            <a href="<?php echo $fin ?>" target="_blank"><?php echo $msg ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>                        
                             </div>
                             <?php
                        }
                         }
                         ?>
      <?php
}

?>
                </div>
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
                <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>


      </body>
</html>
      
      <!-- <p><iframe src="<?php echo $fin ?>" frameborder="0" height="100%"
     width="95%"></iframe></p> -->


