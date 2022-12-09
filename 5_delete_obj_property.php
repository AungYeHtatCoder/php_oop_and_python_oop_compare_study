<?php 
class Fruit {
    private $name;
    private $color;

    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    public function show() {
        echo 'Name: ' . $this->name . 'Color: ' . $this->color;
    }
}

// create an object of the class Fruit
$obj = new Fruit('Apple', 'Red');

// delete the Object property
unset($obj->name);

// accessing $obj property after deleting it will throw an error
echo $obj->name;
// output: PHP Fatal error:  Cannot access property name on an object of class Fruit in ...