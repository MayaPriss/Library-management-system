<?php
require_once("connection.php");

$ID="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$ID = $_POST["ID"];
	$sql = "DELETE FROM `book` WHERE `ID` = '$ID'";
	$result = $conn->query($sql);

header('Location:removebook.php');
$conn -> close();
}
?>