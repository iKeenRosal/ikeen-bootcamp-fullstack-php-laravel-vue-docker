<?php

class Person {
    public $name;
    public $age;

    public function sayHello() {
        return "Hi, I'm $this->name and I'm $this->age years old.";
    }
}

$keen = new Person();
$keen->name = "Keen";
$keen->age = 38;

echo $keen->sayHello() . "\n";
