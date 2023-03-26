<?php
     $conn=mysqli_connect('sql12.freesqldatabase.com','sql12608210','fBXhWL98H4','sql12608210') or die("Connection failed" .mysqli_connect_error());
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Material</title>
</head>
<body>
<?php
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
        if(isset($_POST['name'])&& isset($_POST['type']) && isset($_POST['Semester']) && isset($_POST['Subject']) && isset($_POST['link'])){
        $Semester=$_POST['Semester'];
        $Subject=$_POST['Subject'];
        $Type=$_POST['type'];
        $name=$_POST['name'];
        $link=$_POST['link'];
        if(($Type=='B' || $Type=='A' || $Type=='Q' || $Type=='N' )){
            $sql="INSERT INTO Links VALUES ('$Semester','$Subject','$Type','$name','$link')";
            $query =mysqli_query($conn,$sql);
            if($query){
                if($Type == 'B'){
                    header("Location: Books.php");
                }
                if($Type == 'A'){
                    header("Location: Assignment.php");
                }
                if($Type == 'N'){
                    header("Location: Notes.php");
                }
                if($Type == 'Q'){
                    header("Location: pyq.php");
                }
            }
            else{
                echo 'Value exists';
            }
        }
        else{
            echo 'Invalid input';
        }
    }
}
?>      
    <form action="UploadMaterial.php" method="post">
    <h3>Enter Material Details</h3>
    <label for="Semester">Semester:</label><br>
    <input  type="text" name="Semester" id="Semester" required placeholder="Semester"><br><br> 
    <label for="Subject">Subject:</label><br>
    <input  type="text" name="Subject" id="Subject" required placeholder="Subject"><br><br>           
    <label for="type">Material Type(B/A/Q/N):</label><br>
    <input type="text" id="type" name="type" required placeholder="Type"><br><br>
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required placeholder="name"><br><br>
    <label for="link">Link:</label><br>
    <input type="text" id="link" name="link" required placeholder="link"><br><br>
    <input type="submit" name="submit" id="submit">
    </form>
</body>
</html>