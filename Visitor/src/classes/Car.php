<?php

namespace src\Classes;

use src\visitor\ParkingVisitor;

class Car implements Vehicle{
    public  function accept(ParkingVisitor $visitor)
    {
        $visitor->visitCar($this);
    }
}