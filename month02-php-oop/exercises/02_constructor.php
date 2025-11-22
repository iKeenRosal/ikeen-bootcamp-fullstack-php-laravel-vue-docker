<?php

class Car {
    public $brand;
    public $year;

    public function __construct($brand, $year) {
        $this->brand = $brand;
        $this->year = $year;
    }

    public function info() {
        return "Car: {$this->brand}, Year: {$this->year}";
    }
}

$car = new Car("Toyota", 2020);
echo $car->info() . "\n";
