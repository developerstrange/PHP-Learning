<?php

echo "This is the stage where we will learn how to create a DB using php<br>";

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


// Create a table in DB
$sql = "CREATE TABLE `db_harry` (`sno` INT(10) NOT NULL AUTO_INCREMENT, `name` VARCHAR(20) NOT NULL, `dest` VARCHAR(10) NOT NULL, PRIMARY KEY(`sno`))";
$result = mysqli_query($conn, $sql);
echo "<br>";
var_dump($result);
echo "<br>";



if ($result) {
  echo "The Table was created successfully!";
} else {
  echo "The Table was not created successfully due to this error: " . mysqli_error($conn);
}
