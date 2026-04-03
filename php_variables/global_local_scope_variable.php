<?php


echo"Let's learn Scope, Global, Local variable in PHP<br>";
$a = 9; //Global Variable-->Accesible to all over the program accept inside a funciton
$b = 32;

function printValue(){
  // $a = 44; //Local Variable--->Only accesible to the funciton locally
  // $b = 22;

  global $a, $b;  //Gives access of the global variable to the function and if we change here the global variable will change globally.
  $a = 22;
  $b = 24;
  echo"The value of a and b is $a and $b";
}

printValue();
echo"<br>";
echo"a = $a";
echo"<br>b = $b";
echo"<br>";
echo var_dump($GLOBALS["a"]);
echo"<br>";
echo var_dump($GLOBALS['b']);
echo"<br>";
echo var_dump($GLOBALS);

?>