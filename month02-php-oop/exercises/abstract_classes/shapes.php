<?php

abstract class Shape
{
    abstract public function area(): float;
}

class Circle extends Shape
{
    public function __construct(private float $radius) {}

    public function area(): float
    {
        return pi() * $this->radius ** 2;
    }
}

class Rectangle extends Shape
{
    public function __construct(private float $width, private float $height) {}

    public function area(): float
    {
        return $this->width * $this->height;
    }
}

// TODO: Create shapes and echo their areas.
