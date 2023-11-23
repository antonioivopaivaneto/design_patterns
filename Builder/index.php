<?php

use src\Builder\CarBuilder;
use src\Model\CarDirector;

include __DIR__.'/vendor/autoload.php';


$builder = new CarBuilder();

$builder->setModel("custom car");
$builder->setEngine("custom Engine");
$builder->setTransmission("Autmatic");
$builder->setColor("Blue");
$customCar = $builder->getCar();


echo $customCar->getDetails();


echo "<br>*---------------------------------*<br>";

$director = new CarDirector();
$director->buildSUV($builder);
$suvcar = $builder->getCar();

echo $suvcar->getDetails();