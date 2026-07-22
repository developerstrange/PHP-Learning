<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'db_harry';

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
  echo "<br>DB connection failed.";
}else{
  echo "<br>DB connected successfully";
}

//Fetching all data from database
$sql = "SELECT * FROM `contacts01`";
$result = mysqli_query($conn, $sql);
echo"<br>";

//Find the number of records returned
$num =  mysqli_num_rows($result);
echo $num;
echo " records found in the database.<br>";

//Display rows returned by the sql query
if($num>0){
  // $row = mysqli_fetch_assoc($result);
  // echo var_dump($row);
  // echo"<br>";
  while($row = mysqli_fetch_assoc($result)){
    echo $row['sno'] . ". Hello ". $row['name'] . " Thanks for your given feedback, which is (" . $row['concern'] . ") and your email is: " . $row['email'];
    echo"<br>";
  }
}




?>

