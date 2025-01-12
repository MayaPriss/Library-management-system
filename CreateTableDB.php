<?php

require "connection.php";

$sql = "CREATE TABLE `book` (
  `ID` int(10) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Author` varchar(50) NOT NULL,
  `Category` varchar(20) NOT NULL,
  `Edition` int(4) NOT NULL,
  `Publication` varchar(50) NOT NULL,

  PRIMARY KEY(`ID`)
);";

if ($conn->query($sql)) {
  echo "Table created successfully!";
}
else {
  echo "Error creating book table" . $conn->error;
}

$conn->close();