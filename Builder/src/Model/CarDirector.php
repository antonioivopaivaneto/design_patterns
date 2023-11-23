<?php

namespace src\Model;

use src\Builder\CarBuildInterface;

class CarDirector{
    public function buildSUV(CarBuildInterface $builder){
        $builder->setModel("SUV");
        $builder->setEngine("Powerful engine");
        $builder->setTransmission("automatic");
        $builder->setColor("Red");
    }
}