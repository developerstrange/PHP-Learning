<?php


echo"Deleting data using WHERE clause<br>";

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
$sql = "SELECT * FROM `contacts01` WHERE `sno` = '5'";
$result = mysqli_query($conn, $sql);
echo"<br>";

//Find the number of records returned
$num =  mysqli_num_rows($result);
echo $num;
echo " records found in the database.<br>";


//Displaying data
if($num>0){
  $no = 1;
  while($row = mysqli_fetch_assoc($result)){
    echo $no. ". Hello ". $row['name'] . " Thanks for your given feedback, which is (" . $row['concern'] . ") and your email is: " . $row['email'];
    echo"<br>";
    $no = $no+1;
  }
}

//Deleting data from database
$sql = "DELETE FROM `contacts01` WHERE `contacts01`.`name` = 'Shifat' LIMIT 2 ";
$result = mysqli_query($conn, $sql);

$aff = mysqli_affected_rows($conn);
echo "<br>Number of affected rows: $aff";

if($result){
  echo "<br>We deleted the data successfully";
}else{
  $err = mysqli_error($conn);
  echo "<br>We could not deleted the data successfully due to this error: $err";
}







?>