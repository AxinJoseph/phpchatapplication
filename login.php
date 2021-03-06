<?php
session_start();
if(isset($_SESSION['unique_id'])){
  header("location: users.php");
}
?>

<?php include_once "header.php" ?>
<body class="container">
<div class="wrapper">
    <section class="form login">
      <header>Login to Chat App</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-txt"></div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" >
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter your password" >
          <i class="fas fa-eye"></i>
        </div>
        <div class="link"><a href="enteremail.php">Forgot Password!</a></div>
        <div class="field button">
          <input type="submit" name="submit" value="Continue to Chat">
        </div>
      </form>
      <div class="link">Not Registered Yet? <a href="registerpage.php"> Register Here</a></div>
      <div class="link"><a href="index.html">GO TO HOME</a></div>
    </section>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>