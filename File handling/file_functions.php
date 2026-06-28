<?php

/* If we don't want to just read and display the content of a file then we have to open the file and store it in a file pointer.
   This is where the file funcitons come. These funcitons can read the file and store it into a file pointer variable, can write on it, can append something on file ect.
*/

// Read and store the file in a file pointer

$fileptr = fopen("myfile.txt", "r");

// var_dump($fileptr);       ---> display the return values of functions that is it true or false

// echo $fileptr;      --> This won't display the file

if(!$fileptr)
{
  die("Enter a valid file name");
}
$content = fread($fileptr, filesize("myfile.txt"));   // read the file and returns the length of the file in characters
fclose($fileptr);

echo $content;





?>