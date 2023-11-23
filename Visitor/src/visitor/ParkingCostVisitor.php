<?php
namespace src\visitor;

use src\Classes\Car;
use src\Classes\Motocycle;
use src\Classes\Truck;
use src\visitor\ParkingVisitor;

class ParkingCostVisitor implements ParkingVisitor{
    public function visitCar(Car $car)
    {
        echo "Custo de estacioinanento para um carro<br>";
    }
    public function visitMotocycle(Motocycle $motocycle)
    {
        echo "Custo de estacioinanento para um moto<br>";
    }
    public function visitTruck(Truck $truck)
    {
        echo "Custo de estacioinanento para um caminhao<br>";
    }
}