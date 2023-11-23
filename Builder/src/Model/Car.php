<?php
namespace src\Model;
class Car{
    private $model;
    private $engine;
    private $transmission;
    private $color;

    public function setModel($model){
        $this->model = $model;
    }
    public function setEngine($engine){
        $this->engine = $engine;
    }
    public function setTransmission($transmission){
        $this->transmission = $transmission;
    }
    public function setColor($color){
        $this->color = $color;
    }

    public function getDetails(){
        
        return "Model : {$this->model},Engiune : {$this->engine}, Transmission : {$this->transmission}, Color : {$this->color}";
    
    }

}
