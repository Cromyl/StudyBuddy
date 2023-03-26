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
    <title>Document</title>
</head>
<body>
    <div>
    <h2><?php echo $row['D_Id'];?> <?php echo $row['D_Name'];?></h2>
        <?php echo "Subject: "?>
        <?php echo $row['Subject'];?><br>
        <?php echo "Semester: "?>
        <?php echo $row['Semester'];?><br> 
        <?php echo "Question: "?>
        <?php echo $row['Doubt']?>
        <hr>
        <?php
        while($row2=mysqli_fetch_assoc($result2)){
        ?>
        <div class="answer">
            <p><?php echo $row2['Answer']?></p>
            <p><?php echo $row2['Answerer']?></p>
            <p><?php echo $row2['Answerer_id']?></p>
            <hr>
        </div>
        <?php
        }?>
    </div>
    <h3>Upload your answer</h3>
    <form action="AddToAnswer.php" method="post">
        <label for="Question_id">Question_id</label>
        <input type="text" id="Question_id" name="Question_id"><br><br>
        <label for="Answer_id">Answer_id</label>
        <input type="text" id="Answer_id" name="Answer_id"><br><br>
        <label for="Answerer_id">Answerer_id</label>
        <input type="text" id="Answerer_id" name="Answerer_id"><br><br>
        <label for="Name">Name</label>
        <input type="text" id="Name" name="Name"><br><br>
        <label for="Answer">Answer</label>
        <input type="text" id="Answer" name="Answer"><br><br>
        <input type="submit" name="submit" id="submit">
    </form>
</body>
