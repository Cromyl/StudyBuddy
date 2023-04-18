<?php 
   $servername = "sql12.freesqldatabase.com";
   $username = "sql12608210";
   $password = "fBXhWL98H4";
   $myDB= "sql12608210";
   $conn=mysqli_connect('sql12.freesqldatabase.com','sql12610063','nDGjwWyFIG','sql12610063') or die("Connection failed" .mysqli_connect_error());
   // $conn=new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
    $query="SELECT * FROM student";
    $result=mysqli_query($conn,$query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="bg-img" style="height: max-height;
  background-image: url(img3.jpg);
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;">


<table style="width:100%">
    <tr>
        <td>ID</td>
        <td>NAME</td>
        
    </tr>
    
    
        <?php
            while($row=mysqli_fetch_assoc($result)){
            ?>
            <tr>
            <td>   <?php echo $row['ID']?></td>
            <td>  <?php echo $row['NAME']?></td>
           
    </tr>
    
            <?php
            }
        ?>
        </table>
    
</body>
</html>