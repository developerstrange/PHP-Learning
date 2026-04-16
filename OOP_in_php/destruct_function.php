<?php

class Employee
{
  // Properties
  public $name;
  public $salary;

  // Constructor
  function __construct($name, $salary)
  {
    $this->name = $name;
    $this->salary = $salary;
  }

  // Destructor - The PHP __destruct() function is a special method within a class that is automatically called when an object is destroyed or when the script finishes execution.
  function __destruct()
  {
    echo "I am destructing $this->name <br>";
  }
}

$tuhin = new Employee("Tuhin", 50000);
$siam = new Employee("Siam", 55000);
