<?php
     $conn=mysqli_connect('sql12.freesqldatabase.com','sql12608210','fBXhWL98H4','sql12608210') or die("Connection failed" .mysqli_connect_error());
?>
<!DOCTYPE html>
<html lang="en">
<head>
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
            var semesterSel = document.getElementById("semester");
            var subjectSel = document.getElementById("subject");
            for (var x in semesterObject) {
                semesterSel.options[semesterSel.options.length] = new Option(x, x);
            }
            semesterSel.onchange = function() {
                var Sem=this.value;
                document.cookie="semname="+Sem;
                subjectSel.length = 1;
                for (var y in semesterObject[this.value]) {
                subjectSel.options[subjectSel.options.length] = new Option(y, y);
                }
            }
            subjectSel.onchange = function() {
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Material</title>
</head>
<body>

<?php
    //echo 'ghuss';
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
       // echo 'aur thoda';
        if(isset($_POST['name'])&& isset($_POST['type']) && isset($_POST['semester']) && isset($_POST['subject'])  ){
           // echo 'pahhuch';
        $semester='sem'.$_COOKIE['semname'];
        $subject=$_COOKIE['subname'];
        $type=$_POST['type'];
        $name=$_POST['name'];
        $files=$_FILES['uploadfile'];
        $time=date("Y_m_d_h_i_sa");
        $filename=$files['name'];
        $filetmp=$files['tmp_name'];
        $filtype=explode('/',$files['type'])[1];
        $destinationfile='material/'.$semester.'/'.$subject.'/'.$type.'/'.$time.'.'.$name.'.'.$filtype;
        //echo $destinationfile;
        move_uploaded_file($filetmp,$destinationfile);
        echo 'File uploaded Successfully';
    }
}
?>      

    <form name="myform" action="UploadMaterial.php" onsubmit="return validate()" method="post" enctype="multipart/form-data">
    <h3>Enter Material Details</h3>

    Semester: <select name="semester" id="semester">
        <option value="" selected="selected">Select semester</option>
    </select>
    <br><br>
    Subject: <select name="subject" id="subject">
        <option value="" selected="selected">Please select semester first</option>
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
    <label for="name">Title:</label><br>
    <input type="text" id="name" name="name" required placeholder="Title"><br><br>
    <label for="uploadfile">Choose Material:</label><br>
    <input type="file" name="uploadfile" id="uploadfile" class="form-control"><br><br><br>
    <input type="submit" name="submit" id="submit">
    </form>
</body>
</html>