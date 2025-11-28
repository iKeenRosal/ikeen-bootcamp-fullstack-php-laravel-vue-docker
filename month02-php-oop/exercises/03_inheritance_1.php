<?php

class Animal {
    public function speak() {
        return "Some generic sound";
    }
}

class Dog extends Animal {
    public function speak() {
        return "Woof!";
    }
}

$animal = new Animal();
$dog = new Dog();

echo $animal->speak() . "\n";
echo $dog->speak() . "\n";
