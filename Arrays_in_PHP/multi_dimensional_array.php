<?php


echo"Welcome to Multi-dimensional Array<br>";


//Two-Dimensional Array

$matrix = array(
    array(2,3,7,8),
    array(1,5,6,0),
    array(2,8,9,3)
);

for($i=0; $i<count($matrix); $i++){
  for($j=0; $j<count($matrix[$i]); $j++){
    echo $matrix[$i][$j];
    echo" ";
  }
   echo"<br>";
}

for($i=0; $i<count($matrix); $i++){
  echo var_dump($matrix[$i]);
  echo"<br>";
}

?>