<?php

echo "do-while loops in PHP<br>";

$i = 40;
do{
  echo "You have $i thousand dollars in your account right now.<br>";
  $i+=10;
}while($i < 80);

// Will execute atleast once
$i = 40;
do{
  echo "You have $i thousand dollars in your account right now.<br>";
  $i+=10;
}while($i < 30);

?>