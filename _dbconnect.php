<?php

// creating variables
$servername = "localhost";
$username = "root";
$password = "769";
$database = "db_harry";

// Create a connection object
$conn = mysqli_connect($servername, $username, $password, $database);


echo "<br>";
if (!$conn) {
  die("Sorry we failed to connect the database: " . mysqli_connect_error());
} else {
  echo "Database connected successfully!";
}

?>