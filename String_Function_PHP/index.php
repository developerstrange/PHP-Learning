<?php



//Functions of String
// '.' --> operator used to concatenate two string

$object = "Ahan is a drug dealer.";
echo $object;
echo "<br>";

echo "The length of " . "my string is: ". strlen($object);  //used to know the length of a string
echo "<br>";
echo "Word contains my string is: ". str_word_count($object);  ///used to count word in a string
echo "<br>";
echo "The reverse version of my string is: " . strrev($object);  //used to know the reverse version of a string
echo "<br>";
echo "The word drug starts from: " . strpos($object,"drug");  //used to know the position of particular word in a string
echo "<br>";
echo str_replace("Ahan","Nafis",$object);  //used to replace any word in a string
echo "<br>";
echo str_repeat($object,10);     //used to repeat a string
echo "<br>";
echo rtrim("<pre>      He is          </pre>");  //used to print or render any string as it is with white spaces
echo "<pre>";
echo rtrim("          he is       ");
echo "<br>";
echo ltrim("          he is       ");
echo "</pre>";





?>