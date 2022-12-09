<?php
class Student
{
    // class variable
    public static $school_name = 'ABC School';

    // constructor
    public function __construct($name, $age)
    {
        // instance variables
        $this->name = $name;
        $this->age = $age;
    }

    // instance method
    public function show()
    {
        // access instance variables and class variables
        echo 'Student: ' . $this->name . ' ' . $this->age . ' ' . self::$school_name;
    }

    // instance method
    public function change_age($new_age)
    {
        // modify instance variable
        $this->age = $new_age;
    }

    // class method
    public static function modify_school_name($new_name)
    {
        // modify class variable
        self::$school_name = $new_name;
    }
}

$s1 = new Student("Harry", 12);

// call instance methods
$s1->show();
$s1->change_age(14);

// call class method
Student::modify_school_name('XYZ School');

// call instance methods
$s1->show();