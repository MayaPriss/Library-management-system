<?php

  include("connection.php");

  if($_SERVER["REQUEST_METHOD"]=="POST") {
    $ID = $_POST["ID"];
    $Title = $_POST["Title"];
    $Author = $_POST["Author"];
    $Category = $_POST["Category"];
    $Edition = $_POST["Edition"];
    $Publication = $_POST["Publication"];

    $query1="INSERT INTO `book`(`ID`,`Title`,`Author`,`Category`,`Edition`,`Publication`)VALUES('$ID','$Title','$Author','$Category','$Edition','$Publication')";
    $save = $conn->query($query1);
  }
    header('Location: viewbook.php');
    $conn -> close();
?>
