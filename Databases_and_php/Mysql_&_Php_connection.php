<?php

echo "Welcome to the stage where we are ready to get connected with Mysql";
echo "<br>";

//Ways to connect to a MySQL database
/*
1. MySQLi extension(It has two types: Procedural{Direct program function used},Object oriented{classes and method used})
2. PDO(Php Data Object)

*/


//Connection to the DB

// Creating the variables
$servername = "localhost";
$username = "root";
$password = "769";


// Create a connection object
$conn = mysqli_connect($servername, $username, $password);

// Die if connection was not successful

if (!$conn) {
  die("Sorry we failed to connect: " . mysqli_connect_error());
} else {
  echo "Connection was successful";
}
