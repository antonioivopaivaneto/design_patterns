<?php
namespace src\Classes;

use src\visitor\ParkingVisitor;

class Motocycle implements Vehicle{
    public  function accept(ParkingVisitor $visitor)
    {
        $visitor->visitMotocycle($this);
    }
}