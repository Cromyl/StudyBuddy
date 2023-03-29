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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
<link href="styles.css" rel="stylesheet" />
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
        
        echo '<div style="margin-bottom: 0px" class="alert alert-success alert-dismissible fade show" role="alert">
        <strong> File Uploaded Successfully.</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
}
?>      

<section class="bg-light py-5">
    <div class="container px-5 my-3 px-5">
        <div class="text-center mb-5">
            <h2 class="fw-bolder">Upload Material</h2>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-4">
                <form name="myform" action="UploadMaterial.php" onsubmit="return validate()" method="post" enctype="multipart/form-data">
                <div class="form-floating mb-3">
                         <select class="form-select" name="semester" id="semester"><option  value="" selected="selected">Select semester</option></select>
                </div>
                <div class="form-floating mb-3">
                    <select class="form-select" name="subject" id="subject">
                        <option value="" selected="selected">Please select semester first</option>
                    </select>
                </div>
                <div class="form-floating mb-3">
                    <select class="form-select" name="type" id="type">
                        <option value="C">Choose:</option>
                        <option value="B">Books</option>
                        <option value="A">Sample Assignment</option>
                        <option value="Q">Previous Year Papers</option>
                        <option value="N">Notes</option>
                        <label for="type">Material Type:</label>
                    </select>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" type="text" id="name" name="name" required placeholder="Title">
                    <label for="name">Title:</label>
                </div>
                <div class="mb-3">
                    <input type="file" name="uploadfile" id="uploadfile" class="form-control">
                </div>
                <div class="d-grid"><button class="btn btn-primary btn-lg"type="submit" name="submit" id="submit" >Submit</button></div>
                            

            </form>
            </div>
        </div>



    </div>
</section>





    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
                <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</body>
</html>