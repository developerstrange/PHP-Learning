<?php

echo "This is the stage where we will learn how to create a DB using php<br>";

// creating variables
$servername = "localhost";
$username = "root";
$password = "769";

// Create a connection object
$conn = mysqli_connect($servername, $username, $password);



echo "<br>";
if (!$conn) {
  die("Sorry we failed to connect the database: " . mysqli_connect_error());
} else {
  echo "Database connected successfully!";
}


// Create a DB

$sql = "CREATE DATABASE db_harry";
$result = mysqli_query($conn, $sql);
echo "<br>";
var_dump($result);
echo "<br>";

//Check for the database creation
/*
if ($result) {
  echo "The DB was created successfully!";
} else {
  echo "The DB was not created successfully due to this error: " . mysqli_error($conn);
}
*/


