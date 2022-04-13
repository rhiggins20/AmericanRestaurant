<?php

  $host = "localhost";
  $username = "root";
  $password = "";
  $dbname = "newsletter";

  // Create a connection
  $conn = new mysqli($host, $username, $password, $dbname);

  if ($conn->connect_error)
  {
    die("Connection error: " . $conn->connect_error);
  }
  else
  {
    //Connection was successful.
  }
?>
