<?php
    //echo 'aaya hu';
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit1'])){
        $conn=mysqli_connect('sql12.freesqldatabase.com','sql12610063','nDGjwWyFIG','sql12610063') or die("Connection failed" .mysqli_connect_error());
        if((isset($_POST['Subject'])&&isset($_POST['Semester'])&&isset($_POST['D_Name'])&&isset($_POST['Doubt']))){
            $Subject=$_POST['Subject'];
            $Semester=$_POST['Semester'];
            $D_Name=$_POST['D_Name'];
            $Doubt=$_POST['Doubt'];
    
            $sql="INSERT INTO Doubt (Subject,Semester,D_Name,Doubt) VALUES ('$Subject','$Semester','$D_Name','$Doubt')";

            $query =mysqli_query($conn,$sql);
            if($query){
                header("Location: Annoucement.php");
            }
            else{
                echo 'Value exists';
            }
           
        }
    }
?>