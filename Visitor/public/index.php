<?php

use src\Classes\Car;
use src\Classes\Motocycle;
use src\Classes\Truck;
use src\visitor\ParkingCostVisitor;

require_once __DIR__ . "./../vendor/autoload.php";


$vehicles = [

    new Car(),
    new Motocycle(),
    new Truck(),
];

$parkingCostVisitor = new ParkingCostVisitor();

include("../src/view/header.php");

foreach($vehicles as $vehicle){
    $vehicle->accept($parkingCostVisitor);
}

