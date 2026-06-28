<?php


$flieptr = fopen("myfile.txt","r");

// echo fgets($flieptr);  -----> read file line by line, when one line done reading the file pointer moves to the next line.
// echo "<br>";
// echo fgets($flieptr);
// echo "<br>";
// echo fgets($flieptr);
// echo "<br>";
// echo var_dump(fgets($flieptr));

// while($a = fgets($flieptr)){
//   echo $a;
//   echo "<br>";
// }

// echo "<br>";
// echo "<br>";
// echo "<br>";

// echo fgetc($flieptr);        ---> read file character by character, when one character done reading the file pointer moves to the character line.
// echo "<br>";
// echo fgetc($flieptr);
// echo "<br>";
// echo fgetc($flieptr);
// echo "<br>";


// while($a = fgetc($flieptr)){
//   echo $a;
// }


// Write a program which read the content of a file until full stop encounters.

while($a = fgetc($flieptr)){
  echo $a;
  if($a == "."){
    break;
  }
}

fclose($flieptr);



?>