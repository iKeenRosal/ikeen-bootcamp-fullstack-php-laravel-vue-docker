<?php
/**
 * GOAL:
 * + Understand polymorphism: one function handling multiple types
 * + Reinforce type-hinting and abstract parent classes
 */

require '06_abstract_classes.php';

function printArea(Shape $shape)
{
    echo "Area: " . $shape->area() . "\n";
}

// TODO: Call printArea() with Circle and Rectangle.


