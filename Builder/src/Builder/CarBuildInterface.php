<?php
namespace src\Builder;

use src\Model\Car;

interface CarBuildInterface{
    public function setModel();
    public function setEngine();
    public function setTransmission();
    public function setColor();
    public function getCar():Car;
}