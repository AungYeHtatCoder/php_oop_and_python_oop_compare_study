<?php
class Fruit {
    private $name;
    private $color;

    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    public function show() {
        print('Name: ' . $this->name . ' Color: ' . $this->color);
    }
}

// create an object of the class Fruit
$obj = new Fruit('Apple', 'Red');

// modify the object property
$obj->name = 'strawberry';

// call the instance method using the object
$obj->show();

// output: Fruit is strawberry and color is Red