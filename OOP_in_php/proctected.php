<?php

class Employee{
  public $name;
  public $salary;

  function __construct($name, $salary){
    $this->name = $name;
    $this->salary = $salary;
    $this->describe();
  }


  // Because of this fucntion is protected i can access it from the child class.
  protected function describe(){  
    echo "Name of this employee is: $this->name<br>";
    echo "Salary of this employee is: $this->salary<br>";
  }
}


class Programmer extends Employee{
  public $lang = "php";

  function __construct($name, $salary, $lang){
    $this->name = $name;
    $this->salary = $salary;
    $this->lang = $lang;
    $this->describe();
  }
   protected function describe(){  
    echo "Name of this employee is: $this->name<br>";
    echo "Salary of this employee is: $this->salary<br>";
    echo "Programming language of this employee is: $this->lang<br>";
  }
}

$rohan = new Employee("Rohan", 30000);
$geeta = new Programmer("Geeta", 20000, "Python");

?>