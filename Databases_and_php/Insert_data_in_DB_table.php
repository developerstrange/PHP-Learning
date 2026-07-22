<?php

echo "We will now learn how to insert data in a database table using PHP query";

$servername = "localhost";
$username = "root";
$password = "";
$database = "db_harry";

$conn = mysqli_connect($servername, $username, $password, $database);
echo "<br>";

if (!$conn) {
  echo "Database conneciton failed due to this error: " . mysqli_connect_errno();
} else {
  echo "Database connected successfully!";
}

// Variables to insert data into database
$name = "Shubham";
$destination = "Tamilnadu";

// Inserting data into a database
$sql = "INSERT INTO `db_harry` (`name`, `dest`) VALUES ('$name', '$destination')";
$result = mysqli_query($conn, $sql);

echo "<br>";

if ($result) {
  echo "Data inserted successfully!";
} else {
  echo "Data insertion failed due to this error: " . mysqli_error($conn);
}
