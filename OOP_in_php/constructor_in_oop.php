<?php

class Employee
{
  // Properties
  public $name;
  public $salary;

  // Constructor - It allows us to initialize objects. It is the code which is executed whenever a new object is instantiated.
  // Constructor without arguments
  // function __construct()
  // {
  //   echo "This is my constructor for employee.<br>";
  // }

  // Constructor with arguments
  function __construct($name, $salary)
  {
    $this->name = $name;
    $this->salary = $salary;
  }
}

$rohan = new Employee("Roahn Ahmed", 300000);
echo "<br> The salary of Rohan is: $rohan->salary";

$tuhin = new Employee("Azizur Tuhin", 50000);
echo "<br> The name of the employee is: $tuhin->name and salary is: $tuhin->salary";
