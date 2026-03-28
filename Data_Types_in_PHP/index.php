<?php

/* Data Types in PHP:
1. String
2. Integer
3. Float
4. Array
5. Object
6. NULL
7. Boolean
*/


//String - Sequence of Characters
$name = 'Sakil';
$class = '10';
echo "$name is studying in class $class<br>";


//Integer - Non-decimal numbers
$roll = 4;



//Float - Decimal point number
$marks = 96.5;


//Boolean - can be either true or false
$x = true;
$y = false;

// echo"$x and $y<br>";   --> Not appropriate to see the datatype and the value
echo var_dump($x);
echo "<br>";
echo var_dump($y);


//Object - Instance of classes
//Employee can be a class ---> Rohan can be an object of employee class

//Array - used to store multiple values in one single variable
$names = array("sakil","soumik","sabbir");
echo"<br";
echo var_dump($names);
echo "<br> $names[2]";


//Null - is a special type of data types which contains nothing
$name = NULL;
echo "<br>";
echo var_dump($name);


?>