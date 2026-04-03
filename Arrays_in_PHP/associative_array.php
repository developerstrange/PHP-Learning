<?php

echo"Welcome to Associative Array in PHP";

// Index array
$color = array('red','gree','blue','white');
echo"<br>";
echo $color[2];


// Associative Array

$favColor = array(
    'Ratul' => 'Red',
    'Fuad' => 'Yellow',
    'Muja' => 'Orange',
    'Ahan' => 'Black'
);

echo"<br>";
echo $favColor['Fuad'];
echo"<br>";
echo $favColor['Ahan'];

foreach ($favColor as $key => $value) {
  echo"<br> Favourite color of $key is $value.";
}


?>