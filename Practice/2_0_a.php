<?php

function countEelement($nums){
  $count = 0;
  $candidate = null;

  foreach($nums as $num){
    if($count == 0){
      $candidate = $num;
    }

    if($candidate == $num){
      $count++;
    }else{
      $count--;
    }
  }
  return $candidate;
}


// $nums = [3,2,3];
$nums = [2,2,1,1,1,2,2];
echo countEelement($nums);

?>