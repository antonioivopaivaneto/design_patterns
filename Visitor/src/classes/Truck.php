<?php
namespace src\Classes;

use src\visitor\ParkingVisitor;

class Truck implements Vehicle{
    public  function accept(ParkingVisitor $visitor)
    {
        $visitor->visitTruck($this);
    }
}   