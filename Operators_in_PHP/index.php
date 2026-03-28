<?php
  echo "Operators in PHP";

  /*
    1. Arithmatic Operators
    2. Assignment Operators
    3. Logical Operators
    4. Comparison Operators
  **/

// Arithmatic Operator
$a = 32;
$b = 6;

echo "For a+b, the result is: ".($a+$b)."<br>";
echo "For a-b, the result is: ".($a-$b)."<br>";
echo "For a*b, the result is: ".($a*$b)."<br>";
echo "For a/b, the result is: ".($a/$b)."<br>";
echo "For a%b, the result is: ".($a%$b)."<br>";


// Assignment Operator
$x = $a;
echo "For x, the value of x is: $x <br>";

$a += 8;
echo "For a, the value of updated a is: $a <br>";


// Comparison Operator
$y = 78;
$z = 77;


echo "For y == z, the result is: ";
echo var_dump($y == $z);
echo "<br>";

echo "For y <= z, the result is: ";
echo var_dump($y <= $z);
echo "<br>";


echo "For y <> z, the result is: ";
echo var_dump($y <> $z);
echo "<br>";


// Logical Operators
$m = true;
$n = false;

echo "For y and z, the result is: ";
echo var_dump($m and $n);
echo "<br>";
echo var_dump($m && $n);
echo "<br>";


echo "For y and z, the result is: ";
echo var_dump($m or $n);
echo "<br>";
echo var_dump($m || $n);
echo "<br>";
















?>