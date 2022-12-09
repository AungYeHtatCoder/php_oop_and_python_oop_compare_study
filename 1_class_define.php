<?php

class Person {

  // properties
  private $name;
  private $sex;
  private $profession;

  // constructor
  public function __construct($name, $sex, $profession) {
    $this->name = $name;
    $this->sex = $sex;
    $this->profession = $profession;
  }

  // method for displaying the person's information
  public function show() {
    echo "Name: " . $this->name . "\n";
    echo "Sex: " . $this->sex . "\n";
    echo "Profession: " . $this->profession . "\n";
  }

  // method for displaying the person's work
  public function work() {
    echo $this->name . " is working as a " . $this->profession . "\n";
  }
}

// create an object of Person class
$jessa = new Person('Jessa', 'Female', 'Doctor');

// call the show method and work method
$jessa->show();
$jessa->work();

?>
