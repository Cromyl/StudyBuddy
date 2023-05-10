<?php 
  session_start();
  //include_once "php/config.php";
  include_once('../connection.php');
  if(!isset($_SESSION['uid'])){
    header("location: login.php");
  }
?>
<?php include_once "header.php"; ?>



<body class="area">




  <div class="wrapper" style="margin-top: 90px" style="z-index: 3">
    <section class="chat-area">
      <header>
        <?php 
        //print_r($_GET['uid']);
          $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
          //$user_id=$_SESSION['uid'];
          //$user_id=$row['Rollno'];
          //print_r($user_id);
          $sql = mysqli_query($conn, "SELECT * FROM student WHERE Rollno = '{$user_id}'");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
          }else{
           // header("location: users.php");
          }
        ?>
        <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
        <!-- <img src="php/images/<?php// echo $row['img']; ?>" alt=""> -->
        <div class="details">
          <span><?php echo $row['Name'] ?></span>
          <!-- <p><?php// echo $row['status']; ?></p> -->
        </div>
      </header>
      <div class="chat-box">

      </div>
      <form action="#" class="typing-area">
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
        <button><i class="fab fa-telegram-plane"></i></button>
      </form>
    </section>
  </div>

  <script src="javascript/chat.js"></script>

  <!-- <ul class="circles" >
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
            </ul> -->

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
                <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

                
</body>

<?php include_once "navigation.php";?>
</html>
