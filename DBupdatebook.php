<?php
  require_once("connection.php");

  if($_SERVER["REQUEST_METHOD"]=="POST") {

    $ID = $_POST["ID"];
    $Title = $_POST["Title"];
    $Author = $_POST["Author"];
    $Category = $_POST["Category"];
    $Edition = $_POST["Edition"];
    $Publication = $_POST["Publication"];

    $query1 = "UPDATE `book` SET `Title` = '$Title',`Author` = '$Author',`Category` = '$Category',`Edition` = '$Edition',`Publication` = '$Publication' WHERE ID = '$ID'"; 
    $res1 = $conn->query($query1);
    $conn -> close();
    header('Location:updatebook.php');

  }