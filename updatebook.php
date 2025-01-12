<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Book</title>
  <link rel="stylesheet" href="./css/addbook.css">
  <link rel="stylesheet" href="./CSS/navtemplate.css">
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

    <!-- Container -->
    <div class="container">
      <h2>Update Book</h2>
      <div class="card">
      <form action="DBupdatebook.php" name="update_form" method="post" onsubmit="updatebook()">
      <table>
        <tr class="Book-ID-row">
          <td><label for="Book-ID">Book-ID</label></td>
          <td><input type="number" name="ID" id="ID" class="ID" placeholder="Book-ID"></td>
        </tr>
        <tr class="Title-row">
          <td><label for="Title">Title</label></td>
          <td><input type="text" name="Title" id="Title" class="Title" placeholder="Title"></td>
        </tr>
        <tr class="Author-row">
          <td><label for="Author">Author</label></td>
          <td><input type="text" name="Author" id="Author" class="Author" placeholder="Author"></td>
        </tr>
        <tr class="Category-row">
          <td><label for="Category">Category</label></td>
          <td><select name="Category" id="Category">
            <option value="choosemodule" selected disabled>Pleasse choose a category...</option>
            <option value="Fiction" disabled>----Fiction----</option>
            <option value="Adventure">Adventure</option>
            <option value="Fantasy">Fantasy</option>
            <option value="Horror">Horror</option>
            <option value="Sci-Fi">Sci-Fi</option>
            <option value="Non-Fiction" disabled>----Non Fiction----</option>
            <option value="Cooking">Cooking</option>
            <option value="History">History</option>
          </select></td>
        </tr>
        <tr class="Edition-row">
          <td><label for="Edition">Edition</label></td>
          <td><input type="number" name="Edition" id="Edition" class="Edition" placeholder="Edition"></td>
        </tr>
        <tr class="Publicatoin-row">
          <td><label for="Publication">Publication</label></td>
          <td><input type="text" name="Publication" id="Publication" class="Publication" placeholder="Publication"></td>
        </tr>
        </table>
        <div id="message"></div>
        <br>
        <button type="submit" id="submit">Submit Form</button>
      </form>
      <script src="./JavaScript/updatebook.js"></script>
    </div>
  </div>
  </div>
  </section>
  </main>
</div>
</body>
</html>