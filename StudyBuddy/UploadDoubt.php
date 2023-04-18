<?php
    $conn=mysqli_connect('localhost','root','','studybuddy') or die("Connection failed" .mysqli_connect_error());
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
        $query="INSERT INTO Doubt VALUES ('$newid','$subject','$sem','$desc','$title')";
        $result=mysqli_query($conn,$query);
        echo 'Question Uploded Successfully';
        header("Location: DiscussionPage.php");
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="styles.css" rel="stylesheet" />

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="#!" style="font-size:40px; font-weight:bold;">StudyBuddy</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <!-- <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Services</a></li> -->
                    </ul>
                </div>
            </div>
        </nav>
        <section class="bg-light py-5">
            <div class="container px-5 my-5 px-5">
                <div class="text-center mb-5">
                    <form name="myform" action="UploadDoubt.php" onsubmit="return validate()" method="post" enctype="multipart/form-data">
                    <h2 class="fw-bolder">Post Your Doubt</h2>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                            <div class="form-floating mb-3">
                                <select   class="form-select form-control"  name="subject" id="subject">
                                        <option value="" selected="selected"></option>
                                    </select>
                                    <label for="Subject">Subject</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input  class="form-control" type="text" name="title" id="title">
                                <label for="QuestionTitle">Type your Question Title:</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input  class="form-control" type="text" name="desc" id="desc">
                                <label for="Question">Type your Question Description</label>

                            </div>                            
                            <div class="d-grid"><button class="btn btn-primary btn-lg disabled" name="submit" id="submit" type="submit">Submit</button></div>
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