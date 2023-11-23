<?php
namespace src\Classes;

use src\visitor\ParkingVisitor;

interface Vehicle{
    public function accept(ParkingVisitor $visitor);
}