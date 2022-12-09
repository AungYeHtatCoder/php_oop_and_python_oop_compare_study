<?php 
class Employee {
    // Define the $department property as a class variable
    public $department = "IT";

    // Define the show() method to print the department property
    public function show() {
        echo 'Department is : '.$this->department;
    }
}

$emp = new Employee();
$emp->show();

unset($emp);
$emp->show(); // Will throw an error, since $emp is no longer defined