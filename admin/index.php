<?php
  $username = "pic_tpc";
  $pwd = "tpc@iitp";
  session_start();
  if(isset($_POST["submit"])){
    if($_POST["username"]==$username && $_POST["password"]==$pwd){
      $_SESSION["status"]="true";
      header("Location: list.php");
    }
  }else if(isset($_GET["status"])){
    session_destroy();
  }
?>
<html >
  <head>
    <meta charset="UTF-8">
    <title>IITP TPC Admin Login</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
<body class="align">

  <div class="site__container">

    <div class="grid__container">
      <h1 align="center">Admin Login</h1>
      <?php
      	if(isset($_POST["submit"])){
      		echo '<h2 align="center" style="color:red">Invalid Credentials</h2>';
      	}
      ?>
      <form action="" method="post" class="form form--login">
        <div class="form__field">
          <label class="fontawesome-user" for="login__username"><span class="hidden">Username</span></label>
          <input id="login__username" name="username" type="text" class="form__input" placeholder="Username" required>
        </div>

        <div class="form__field">
          <label class="fontawesome-lock" for="login__password"><span class="hidden">Password</span></label>
          <input id="login__password" name="password" type="password" class="form__input" placeholder="Password" required>
        </div>

        <div class="form__field">
          <input type="submit" name="submit" value="Sign In">
        </div>

      </form>
      <a href="list.php">View Company list</a>
    </div>

  </div>

</body>  
</html>
