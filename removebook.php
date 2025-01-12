<?php
  require_once("connection.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./CSS/removebook.css">
  <link rel="stylesheet" href="./CSS/navtemplate.css">
  <title>Remove Book</title>
</head>
<body>
<div class="xwrapx">  
  <main>
    <aside>
      <ul class="asideList">
        <li><a href="landing_page.html" class="asideAnchor">Home</a></li>
        <div class="dropdown-menu">
          <button class="menu-btn">Collections ▼</button>
            <div class="menu-content">
              <a class="links-hidden" href="viewbook.php">View Books</a>
              <a class="links-hidden" href="addbook.php">Add Books</a>
              <a class="links-hidden" href="removebook.php">Remove Books</a>
              <a class="links-hidden" href="updatebook.php">Update Books</a>
            </div>
        </div>
        <li><a href="about.html" class="asideAnchor2">About</a></li>
        <li><a href="profile.html" class="asideAnchor">Profile</a></li>
        <li><a href="login.html" class="asideAnchor">Login</a></li>
        <li><a href="signup.html" class="asideAnchor">Sign Up</a></li>
        <li><a href="settings.html" class="asideAnchor">Setting</a></li>
      </ul>
    </aside>
    <section>
      <input type="checkbox" id="myInput">
      <label for="myInput">
        <span class="bar top"></span>
        <span class="bar middle"></span>
        <span class="bar bottom"></span>
      </label>
        
  <div class="content">
  <!-- TopNav -->
    <div class="topbar">
      <div class="title">
        <h1>Collection</h1>
      </div>
    </div>

    <!-- Content -->
    <div class="container">
      <h2>Remove Book</h2>
      <div class="card">
        <form action="DBremovebook.php" method="post" onsubmit="removebook();">
        <div class="form-control">
          <label for="Book-ID">Book-ID</label>
          <input type="text" name="ID" id="ID" class="ID" placeholder="Book-ID">
          <p id="msge">Error Message</p>
          <button type="submit" id="submit">Remove</button>
        </div>
        </form>
      </div>
    </div>
  <script src="./JavaScript/removebook.js"></script>
  </div>
  </section>
  </main>
</div>
</body>
</html>