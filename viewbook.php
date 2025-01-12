<?php
  require_once("connection.php");
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./CSS/viewbook.css">
  <link rel="stylesheet" href="./CSS/navtemplate.css">
  <title>View Book</title>
</head>
<body onload="viewbook()">
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
      <h2>View Book</h2>
      <div class="card">
        <table class="table">
          <thead>
            <th scope="col">Book-ID</th>
            <th scope="col">Title</th>
            <th scope="col">Author</th>
            <th scope="col">Category</th>
            <th scope="col">Edition</th>
            <th scope="col">Publication</th>
          </thead>
          <tbody>
          <?php
           $query="SELECT `ID`,`Title`,`Author`,`Category`,`Edition`,`Publication` FROM book";
           $result = $conn->query($query);

             if(($result == FALSE)){
               echo "Retrieval of data from database failed".$conn->error;
             } 

             if($result->num_rows > 0){
               while ($row = $result->fetch_assoc()){
                 echo 
                   "<tr>
                     <td>".$row["ID"]."</td>
                     <td>".$row["Title"]."</td>
                     <td>".$row["Author"]."</td>
                     <td>".$row["Category"]."</td>
                     <td>".$row["Edition"]."</td>
                     <td>".$row["Publication"]."</td>
                   </tr>";
               }
             }
             else{
               echo "0 Results";
             }

             $conn -> close();
           ?>
           </tbody>
         </table>
       </div>
       <div class="total">
        <p>
        <?php
         require("connection.php");
         $sql = "SELECT * FROM book";
         if ($result = $conn->query($sql)) {
           $row_count = $result->num_rows;

           printf("Total books in the table is %d\n", $row_count);
         }  
        ?>
        </p>
      </div>
    </div>
    </div>
  </section>
  </main>
</div>
</body>
</html>