<?php
    //echo 'aaya hu';
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
        $conn=mysqli_connect('sql12.freesqldatabase.com','sql12608210','fBXhWL98H4','sql12608210') or die("Connection failed" .mysqli_connect_error());
        if((isset($_POST['Answer'])&&isset($_POST['Answer_id'])&&isset($_POST['Answerer_id'])&&isset($_POST['Name'])&&isset($_POST['Question_id']))){
            $Answer=$_POST['Answer'];
            $Answer_id=$_POST['Answer_id'];
            $Answerer_id=$_POST['Answerer_id'];
            $Name=$_POST['Name'];
            $Question_id=$_POST['Question_id'];
    
            $sql="INSERT INTO Solution VALUES ('$Answer_id','$Question_id','$Answerer_id','$Name','$Answer')";

            $query =mysqli_query($conn,$sql);
            if($query){
                header("Location: DiscussionPage.php");
            }
            else{
                echo 'Value exists';
            }
           
        }
    }
?>