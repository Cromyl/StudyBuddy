<?php 
  session_start();
  $conn=mysqli_connect('localhost','root','','studybuddy') or die("Connection failed" .mysqli_connect_error());
  if(!isset($_SESSION['uid'])){
    header("location: login.php");
  }
?>
<?php  include_once "header.php"; ?>
<head>
  <style>
    .position{
      background-color: black;
    }
  </style>
</head>
<body class="area">
<ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
            </ul>
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM student WHERE Rollno = '{$_SESSION['uid']}'");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <!-- <img src="php/images/<?php //echo $row['img']; ?>" alt=""> -->
          <div class="details">
            <span><?php echo $row['Name']?></span>
            <p><?php// echo $row['status']; ?></p>
          </div>
        </div>
        <!-- <a href="php/logout.php?logout_id=<?php// echo $row['unique_id']; ?>" class="logout">Logout</a> -->
      </header>
      <div class="search">
        <span class="text">Select an user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
  
      </div>
    </section>
  </div>

  <script src="javascript/users.js"></script>

</body>
<?php include_once "navigation.php"; ?>
</html>
