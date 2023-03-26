<?php
    $conn=mysqli_connect('sql12.freesqldatabase.com','sql12608210','fBXhWL98H4','sql12608210') or die("Connection failed" .mysqli_connect_error());
?>
<?php
   session_start();
   $temp=$_SESSION['uid'];
   $sql="SELECT Semester FROM Student WHERE Rollno='$temp'";
   $query=mysqli_query($conn,$sql);
   $row=mysqli_fetch_array($query);
   $sem=$row[0];
   //echo $sem;
   $query1="SELECT distinct(Subject) FROM Links WHERE Semester='$sem'";
   $result=mysqli_query($conn,$query1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subject</title>
</head>
<body>
<h1>Subjects</h1>
        <div class="Subjects">
            <ol>
            <?php while($row1=mysqli_fetch_assoc($result)){ ?>
                <li><?php echo "<h4>{$row1['Subject']}</h4>";?></li>
                <?php }?>
            </ol>
        </div>   
</body>
</html>