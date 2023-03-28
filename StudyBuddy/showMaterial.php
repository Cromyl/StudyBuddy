<?php 
$conn=mysqli_connect('sql12.freesqldatabase.com','sql12608210','fBXhWL98H4','sql12608210') or die("Connection failed" .mysqli_connect_error());
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
foreach($scan as $file) {
   if (!is_dir("myFolder/$file")) {
      if($file=='ignore.txt') continue;
      $msg=explode('.',$file)[1];
      $fin=$path.'/'.$file;
      ?>
      <a href="<?php echo $fin ?>" target="_blank"><?php echo $msg ?></a>
      <br><br>
      <!-- <p><iframe src="<?php echo $fin ?>" frameborder="0" height="100%"
     width="95%"></iframe></p> -->
      <?php
   }
}

?>


