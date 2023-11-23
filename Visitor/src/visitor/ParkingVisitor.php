<?php
namespace src\visitor;

use src\Classes\Car;
use src\Classes\Motocycle;
use src\Classes\Truck;

interface  ParkingVisitor{
    public function visitCar(Car $car);
    public function visitMotocycle(Motocycle $car);
    public function visitTruck(Truck $car);
}