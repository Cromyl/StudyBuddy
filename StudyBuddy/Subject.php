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
    <title>Subject</title>

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
<h1>Choose Material </h1>

<form name="myform" action="showMaterial.php" onsubmit="return validate()" method="post" enctype="multipart/form-data">
Subject: <select name="subject" id="subject">
        <option value="" selected="selected">Select Subject</option>
    </select>
    <br><br>

    
    <label for="type">Material Type:</label><br>
    <select name="type" id="type">
        <option value="C">Choose:</option>
        <option value="B">Books</option>
        <option value="A">Sample Assignment</option>
        <option value="Q">Previous Year Papers</option>
        <option value="N">Notes</option>
    </select><br><br>

    <input type="submit" name="submit" id="submit">
    </form>
</body>
</html>