<?php

class Vehicle
{
    public function start()
    {
        return "Vehicle starting...";
    }
}

class Car extends Vehicle
{
    public function openTrunk()
    {
        return "Trunk opened!";
    }
}

class Motorcycle extends Vehicle
{
    public function popWheelie()
    {
        return "Popping a wheelie!";
    }
}

// TODO: Instantiate Car and Motorcycle and call their methods.
