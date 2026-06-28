<?php


$fileptr = fopen("myfile2.txt", "w");   // create file if not exist.

// Writing to a file ----> when we open a file in write mode the previous content of that file are being deleted.
fwrite($fileptr, "This PHP course is becoming fun more.\nI want to learn more about it.");

fclose($fileptr);

$fileptr = fopen("myfile2.txt", "w");   // cremoves the file content.
fwrite($fileptr, "This PHP course is becoming fun more.\nI want to learn more about it.");
fclose($fileptr);


// Append to a file  ---> when we open file in append mode the previous content remains and we can add more content in our file if we want.

$fileptr = fopen("myfile2.txt", "a");
fwrite($fileptr, "\nThis is being appended to this file.\n");
fwrite($fileptr, "\nThis is being appended to this file.\n");
fclose($fileptr);



?>