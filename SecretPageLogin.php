<?php
  session_start();
  if(isset($_POST["submit"])) {
    $logins = array('Henry' => 'WeLoveHenry123', 'Rowlet' => 'RowletIsCute');

    $username = isset($_POST["username"]) ? $_POST["username"] : '';
    $pw = isset($_POST['pw']) ? $_POST['pw'] : '';

    if (isset($logins[$username]) && $logins[$username] == $pw) {
      $_SESSION["userdata"]["username"]=$logins[$username];
      header("location: click_me.html");
      exit;
    }
    else {
      $invalid_info="Are you sure you are the REAL Henry???";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./CSS/SecretPageLogin.css">
  <title>Secret Login Page</title>
</head>
<body>
  <!-- TopNav -->
  <div class="topbar">
    <div class="title">
      <h1>Secret Login Page</h1>
    </div>
  </div>

  <!-- Content -->
  <div class="container">
    <h2>Login Page</h2>
    <div class="card">
      <form action="" method="post" onsubmit="error()">
      <div>
        <span>Username</span>
        <br>
        <input type="text" name="username" id="username" class="username" placeholder="Username" autocomplete="off" >
        <br>
        <span>Password</span>
        <br>
        <input type="password" name="pw" id="pw" class="pw" placeholder="Password" autocomplete="off">
        <br>
        <?php if (isset($invalid_info)) { ?>
          <p><?php echo $invalid_info; ?></p>
        <?php } ?>      
        <input type="submit" name="submit" id="submit" class="button" value="Secret Page">
        <br>
      </div>
      </form>
      <script src="../JavaScript/SecretPageLogin"></script>
    </div>
  </div>
</body>
</html>