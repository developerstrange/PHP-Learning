<?php

function findUniqueElements($nums){

$frequency = [];

foreach($nums as $num){
  if(isset($frequency[$num])){
    $frequency[$num]++;
  }else{
    $frequency[$num] = 1;
  }
}

foreach($frequency as $num => $count){
  if($count == 1){
    return $num;
  }
}

}
$nums1 = [4,1,2,1,2,4,7];
$nums2 = [2,2,3,3,5];

echo findUniqueElements($nums1);
echo "<br>";
echo findUniqueElements($nums2);


?>