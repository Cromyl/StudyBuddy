<?php
    $conn=mysqli_connect('sql12.freesqldatabase.com','sql12608210','fBXhWL98H4','sql12608210') or die("Connection failed" .mysqli_connect_error());
?>
<?php
   session_start();
   $temp=$_SESSION['uid'];
   //print_r($temp);
   $sql="SELECT Semester FROM Student WHERE Rollno='$temp'";
   $query=mysqli_query($conn,$sql);
   $row=mysqli_fetch_array($query);
   //print_r($row);
   $sem=$row[0];
   //print_r($sem);
   if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit']) && isset($_POST['subject']) && isset($_POST['title']) && isset($_POST['desc']))
   {
        $title=$_POST['title'];
        $desc=$_POST['desc'];
        $subject=$_POST['subject'];
        $q="SELECT MAX(D_Id) FROM Doubt";
        $r=mysqli_query($conn,$q);
        $row2=mysqli_fetch_array($r);
       // $newid=print_r($row2[0]+1);
        $newid=$row2[0]+1;
        $query="INSERT INTO Doubt VALUES ('$newid','$subject','$sem','$title','$desc')";
        $result=mysqli_query($conn,$query);
        echo 'Question Uploded Successfully';
   }

//    //echo $sem;
//    $query1="SELECT distinct(Subject) FROM Links WHERE Semester='$sem'";
//    $result=mysqli_query($conn,$query1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Doubt</title>

    <script type="text/javascript">
        var semesterObject = {
            "1": { "PHY": [""], "LAL": [""], "ITP": [""], "FEE": [""], "PFC": [""], "POM": [""] },
            "2": { "DMS": [""], "UMC": [""], "COA": [""], "DSA": [""], "PCE": [""], "POE": [""] },
            "3": { "PS": [""], "TOC": [""], "OOM": [""], "OS": [""], "IF": [""], "IM": [""] },
            "4": { "DAA": [""], "PPL": [""], "CN": [""], "SE": [""], "DBMS": [""] },
            "5": { "NS": [""], "GVC": [""], "ML": [""], "IVP": [""], "AI": [""], "MIP1": [""] },
            "6": { "DM": [""], "MIP2": [""] },
            "7": { "MIP3": [""] },
            "8": { "MAP": [""] },
        }
        window.onload = function() {
           // var semesterSel = document.getElementById("semester");
            var subjectSel = document.getElementById("subject");
           // for (var x in semesterObject) {
          //      semesterSel.options[semesterSel.options.length] = new Option(x, x);
           // }
        //    semesterSel.onchange = function() {
                var Sem=<?php echo"$sem"?>;
               // console.log('sds');
               // console.log(Sem);
                document.cookie="semname="+Sem;
                //subjectSel.length = 1;
                for (var y in semesterObject[Sem]) {
                subjectSel.options[subjectSel.options.length] = new Option(y, y);
                }
          //  }
            subjectSel.onchange = function() {
               // console.log("dsdsds");
                var Sub=this.value;
                document.cookie="subname="+Sub;
            }
        }
        function validate() {
            var type = document.forms["myform"]["type"].value;
            if(type=="C"){
                alert("Choose a role first!");
                return false;
            }
        }
    </script>
</head>
<body>
<h1>Write your Query..</h1>

<form name="myform" action="UploadDoubt.php" onsubmit="return validate()" method="post" enctype="multipart/form-data">
Subject: <select name="subject" id="subject">
        <option value="" selected="selected">Select Subject</option>
    </select>
    <br><br>
    Type your Question Title:
<input type="text" name="title" id="title">
<br><br>
        Type your Question Description: <br>
        <input type="text" name="desc" id="desc">
    
   <br><br>

    <input type="submit" name="submit" id="submit">
    </form>


 
</body>
</html>