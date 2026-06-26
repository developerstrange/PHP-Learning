<?php

// include '../_dbconnect.php';
require '../_dbconnect.php';

echo "<br>this is include and require topic<br>";

/*

** include shows error if there's any error on include file but if the file does not exist then only shows warning and cotinues the program.
Means the file should be included.

** require shows error if there's any error on require file but if the file does not exist then it shows fatal error and stop the program from further execution.
Means the file must be required.


*/

 $sql = "SELECT * FROM `contacts01`";
 $result = mysqli_query($conn, $sql);


 $num = mysqli_num_rows($result);
 echo $num;
 echo " records in the Database.<br>";

while($rows = mysqli_fetch_assoc($result)){
  echo $rows['sno'] . ". Hello " . $rows['name'] . ", Welcome to jungle";
  echo "<br>";
}


?>