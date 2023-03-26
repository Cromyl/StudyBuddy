<?php
     $conn=mysqli_connect('sql12.freesqldatabase.com','sql12608210','fBXhWL98H4','sql12608210') or die("Connection failed" .mysqli_connect_error());
     $query="SELECT * FROM Doubt";
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
<body>
        <h1>Discussion Page</h1>
        <table style="width:100%">
        
            <?php
                while($row=mysqli_fetch_assoc($result)){
                ?>
                <div>
                    <div>
                    <h1><?php echo $row['D_Id'];?></h1>
                    <br>
                    </div>
                    <?php echo "Subject: "?>
                    <?php echo $row['Subject'];?><br>
                    <?php echo "Semester: "?>
                    <?php echo $row['Semester'];?><br>
                    <?php echo "Doubt Name: "?>
                    <?php echo $row['D_Name'];?><br>
                    <p>
                    <?php echo $row['Doubt'];?><br>
                    </p>
                    <?php
                    $id=$row['D_Id'];
                    echo "<a href=post.php?id=$id>Answer</a>";
                    ?>
                </div>
        
                <?php
                }
            ?>
            
    </div>
    
</body>
</html>