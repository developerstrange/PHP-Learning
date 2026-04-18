<?php
echo "Hello PHP<br>";

$num = 4;
 
if($num == 4){
  echo "This is four<br>";
}else{
  echo "This is not four.";
}

for($i =0; $i<=$num; $i++){
  echo 'Hello<br>';
}

// $i = 5;
// while($i>0){
// echo "Hello<br>";
// $i--;
// }


function addNumber($num, $num2, $num3){
  $sum = $num+$num+$num;
  return $sum;
}

function checkAge($age){
  if($age>18){
    return true;
  }else{
    return false;
  }
}

$number1 = 5;
$number2 = 6;
$number3 = 8;
$result=addNumber($number1,$number2,$number3);
echo"The sum is: $result<br>";

echo "My name is Naima<br>";

$number4=44;
$number5=55;
$number6=66;
addNumber($number4,$number5,$number6);

$age = 15;
$eligible= checkAge($age);
if($eligible == true){
  echo "I am eligible";
}else if($eligible == false){
  echo "I am not eligible";
}

echo "<br>";

$arr = ['kabir','rahim','ashik','kuddus'];
echo $arr[1];
echo"<br>Array lengths is: " . count($arr); 
echo"<br>";

for($i=0; $i<count($arr); $i++){
  echo $arr[$i];
  echo"<br>";
}



// class Employee{
//    public $id;
//    public $name;
//    public $addres;

//   function setName($nam){
//     $this->name = $nam;
//   }

//   function __construct($name,$id,$address){
//     $this->name = $name;
//     $this->id = $id;
//     $this->address = $address;
//     echo "Object created and properties set.<br>";
//   }

//   function __destruct(){
//     echo "<br>Object destructed.";
//   }

//    public function showDetails(){
//     echo "ID: $this->id<br>";
//     echo "Name: $this->name<br>";
//     echo "Address: $this->address";
//    }
// }


// class faculty extends Employee{
//   function teaching(){
//     echo "$this->name Teacher is teaching";
//   }
// }

// $employee1 = new Employee('Ashraful', 222, 'Khagan');

// $employee1->showDetails();
// // $employee1->teaching();

// $teacheer = new faculty('Mahbubur',212,'Mirpur');
// $teacheer->teaching();



function largestFind($arr){
  $large = $arr[0];
  for($i=1; $i<count($arr); $i++){
    if($arr[$i]>$large){
      $large = $arr[$i];
    }
  }
  return $large;
}
function smallestFind($arr){
  $small = $arr[0];
  for($i=1; $i<count($arr); $i++){
    if($arr[$i]<$small){
      $small = $arr[$i];
    }
  }
  return $small;
}


$arr1 = [4,1,2,1,2];
$arr2 = [2,2,3,3,5];
$small = smallestFind($arr1);
$large = largestFind($arr2);
echo"<br>";
$avg = ($small+$large)/2;
echo $avg;


?>