<?php
    session_start();
    $conn=mysqli_connect('localhost','root','','studybuddy') or die("Connection failed" .mysqli_connect_error());
    $id=$_SESSION['uid'];
    $sql="SELECT * FROM Mentor WHERE Id='$id'";
    $query=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($query);
    $name=$row['Name'];

    $semesterFilter = isset($_POST['semester']) ? $_POST['semester'] : '';

    if(isset($_POST['delete'])) {
        $deleteId = $_POST['delete'];
        $deleteQuery = "DELETE FROM Announcement WHERE Ann_no = '$deleteId'";
        $deleteResult = mysqli_query($conn, $deleteQuery);
        if($deleteResult) {
            header("Location: MentorAnnounce.php");
            exit;
        } else {
            echo "Error deleting announcement: " . mysqli_error($conn);
        }
    }

    $query="SELECT * FROM Announcement";
    if (!empty($semesterFilter)) {
        $query .= " WHERE Semester = '$semesterFilter' OR Semester = '9'";
    }
    $query .= " ORDER BY Ann_no DESC";
    $result=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="styles.css" rel="stylesheet" />
    <title>Admin Announcement</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="#!">Admin Announcement!!</a>
                <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                         <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">User Profile</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Services</a></li> 
                    </ul>
                </div> -->
            </div>
            <a class="btn btn-primary btn-lg px-4 me-sm-3" href="AddAnnouncement.php">Announce Something</a>
        </nav>
<section class="py-5 border-bottom">
    <div class="container px-5 my-5 px-5">
        <div class="text-center mb-5">
            <h1>Announcements</h1><br>
            <div class="d-flex justify-content-end">
                <form method="post">
                    <label for="semester">Filter by Semester:</label>
                    <select name="semester" id="semester">
                        <option value="">All Semesters</option>
                        <option value="1" <?php if ($semesterFilter == '1') echo 'selected'; ?>>Semester 1</option>
                        <option value="2" <?php if ($semesterFilter == '2') echo 'selected'; ?>>Semester 2</option>
                        <option value="3" <?php if ($semesterFilter == '3') echo 'selected'; ?>>Semester 3</option>
                        <option value="4" <?php if ($semesterFilter == '4') echo 'selected'; ?>>Semester 4</option>
                        <option value="5" <?php if ($semesterFilter == '5') echo 'selected'; ?>>Semester 5</option>
                        <option value="6" <?php if ($semesterFilter == '6') echo 'selected'; ?>>Semester 6</option>
                        <option value="7" <?php if ($semesterFilter == '7') echo 'selected'; ?>>Semester 7</option>
                        <option value="8" <?php if ($semesterFilter == '8') echo 'selected'; ?>>Semester 8</option>
                        <!-- Add more semester options as needed -->
                    </select>
                    <button type="submit">Filter</button>
                </form>
            </div>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8">
                <?php
                if ($result->num_rows > 0) {
                    while($row=mysqli_fetch_assoc($result)){
                ?>
                <div class="card mb-4">
                    <div class="card-body p-4">
                        <div class="d-flex">
                            <div class="ms-4">
                                <div class="d-flex flex-row">
                                    <div class="p-2"><i class="bi bi-chat-right-quote-fill text-primary fs-1"></i></div>
                                    <!-- Add a form for the delete button -->
                                         <div class="p-2" style="margin-top: 0.7rem"><h5 class="mb-1"><?php echo $row['Post'];?> </h5></div>
                                        
                                </div>
                                <?php 
                                    echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Semester: ';
                                    $id=$row['Semester'];
                                    if($id=='9') echo "All semesters&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp ";
                                    else echo $id.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                                    echo 'Announcer: '.$name;
                                ?><br>
                                <div class="card-footer" >
                                    <form method="post" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this announcement?');">
                                        <input type="hidden" name="delete" value="<?php echo $row['Ann_no']; ?>">
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i> Delete</button>
                                    </form>
                                </div>
                                    
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    }
                }
                else{
                    echo "<tr><td colspan='3'>No announcements found.</td></tr>";
                }
                ?>

            </div>
        </div>
    </div>
</section>


        <br>
            
                
                
        
               
        <br>
        <table style="width:100%">
        
            
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

    
</body>
</html>







