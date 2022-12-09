<?php
// Define the Student class
class Student {
  // Define class attributes
  public static $school_name = "DPS School";

  // Define instance attributes (constructor)
  public $name;
  public $age;

  public function __construct($name, $age) {
    $this->name = $name;
    $this->age = $age;
  }

  // Define other methods to manipulate the object's data
  public function getName() {
    return $this->name;
  }

  public function setName($name) {
    $this->name = $name;
  }

  public function getAge() {
    return $this->age;
  }

  public function setAge($age) {
    $this->age = $age;
  }
}

// Create an instance of the Student class
$s1 = new Student("Jessa", 23);

// Use the object's methods to access and manipulate its data
echo "Student: " . $s1->getName() . " Age: " . $s1->getAge();

// Access the class attribute using the class name
echo "School Name: " . Student::$school_name;

// Modify the instance variable
$s1->setName("Jessa");
$s1->setAge(14);
echo "Student: " . $s1->getName() . " Age: " . $s1->getAge();

// Modify the class variable
Student::$school_name = "ABC School";
echo "School Name: " . Student::$school_name;