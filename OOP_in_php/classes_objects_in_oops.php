<?php

echo "Classes and Objects in OOPs in PHP<br>";

class Player
{
  // Properties
  public $name;
  public $age;
  public $running = false;

  // Methods
  function set_name($name)
  {
    $this->name = $name;
  }
  function set_age($age)
  {
    $this->age = $age;
  }


  function get_name()
  {
    return $this->name;
  }

  function startRun()
  {
    $this->running = true;
  }

  function stopRun()
  {
    $this->running = false;
  }

  function displayInformation()
  {
    echo "Player name is: " . $this->name;
    echo "<br>Player age is: " . $this->age;
    if ($this->running == true) {
      echo "<br>Player is running.";
    } else {
      echo "<br>Player is not running.";
    }
  }
}

$Player1 = new Player();    // Creating object
$Player1->set_name("Abdur Rob");
$Player1->set_age(24);
$Player1->startRun();
$Player1->displayInformation();
