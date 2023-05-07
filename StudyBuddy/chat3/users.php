<?php 
  session_start();
  $conn=mysqli_connect('localhost','root','','studybuddy') or die("Connection failed" .mysqli_connect_error());
  if(!isset($_SESSION['uid'])){
    header("location: login.php");
  }
?>
<?php  include_once "header.php"; ?>
<head>
<link href="style.css" rel="stylesheet" />
<style>
  p,.p{
    color: #67676a;
    word-wrap: break-word;
    padding: 0px;
    margin:0px;
    text-decoration:none;
  
              background: #333;
  color: black;
  font-color: black;
  border-radius: 18px 18px 0 18px;
  background: #fff;
  color: #333;
  border-radius: 18px 18px 18px 0;
  font-size: 15px;
}
</style>
</head>

<body class="area">
<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>
  <div class="wrapper" class="bg">
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM mentor WHERE Id = '{$_SESSION['uid']}'");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <!-- <img src="php/images/<?php //echo $row['img']; ?>" alt=""> -->
          <div class="details" style="">
            <span style=""><?php echo $row['Name']?></span>
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
      <div class="users-list" style="color: black;text-decoration:none;">
              <hr><hr>
      </div>
    </section>
  </div>

  <script src="javascript/users.js"></script>

</body>
<?php include_once "navigation.php";?>
</html>
