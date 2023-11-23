<?php
namespace src\Builder;

use src\Model\Car;

class CarBuilder implements CarBuildInterface{
    private $car;

    public function __construct(){
        $this->car = new Car();
    }

    public function setModel($model = "basic Car")
    {
        $this->car->setModel($model);
    }
    public function setEngine($engine = "Basic Engine")
    {
        $this->car->setEngine($engine);
    }
    public function setTransmission($transmission = "Manual")
    {
        $this->car->setTransmission($transmission);
    }
    public function setColor($color = "Black")
    {
        $this->car->setColor($color);
    }
    public function getCar():Car
        {
        return  $this->car;
    }
}