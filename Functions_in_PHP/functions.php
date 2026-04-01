<?php

echo"Welcome to PHP functions";

function totalMarks($sumArr){
  $sum=0;
  foreach($sumArr as $value){
    $sum += $value;
  }
  return $sum;
}

function avgMarks($sumArr){
  $sum=0;
  $i = 1;
  foreach($sumArr as $value){
    $sum += $value;
    $i++;
  }
  return $sum/$i;
}

$rohan = [97,33,54,66,54,65];
$rohanTotal = totalMarks($rohan);
$rohanAvg = avgMarks($rohan);
echo"<br>Total marks of Rohan is: $rohanTotal";
echo"<br>Average marks of Rohan is: $rohanAvg"; 





?>