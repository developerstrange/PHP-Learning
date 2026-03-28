<?php

$mark = 'G';

switch($mark){
  case 'A':
    echo "You got 90+ mark in your exam.<br>";
    break;
  case 'B':
    echo "You got 80+ mark in your exam.<br>";
    break;
  case 'C':
    echo "You got 70+ mark in your exam.<br>";
    break;
  case 'D':
    echo "You got 60+ mark in your exam.<br>";
    break;
  case 'E':
    echo "You got passed hardly.<br>";
    break;
  default:
    echo "You failed in your exam.<br>";
    break;
}



?>