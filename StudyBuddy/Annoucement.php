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
        <h1>Annoucement</h1>
        <br>
        <br>
        <table style="width:100%">
        
            <?php
                while($row=mysqli_fetch_assoc($result)){
                ?>
                <div>
                    <div>
                    <h2><?php echo $row['D_Id'];?> <?php echo $row['D_Name'];?></h2>
                    </div>
                    <?php echo "Subject: "?>
                    <?php echo $row['Subject'];?><br>
                    <?php echo "Semester: "?>
                    <?php echo $row['Semester'];?><br>                   
                    <p>
                    <?php echo $row['Doubt'];?><br>
                    </p>
                </div>
        
                <?php
                }
            ?>
            
    </div>
    
</body>
</html>