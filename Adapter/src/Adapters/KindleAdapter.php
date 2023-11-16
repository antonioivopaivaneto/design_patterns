<?php

namespace src\Adapters;
use src\Interfaces\BookInterface;
use src\kindle;

class kindleAdapter implements BookInterface{
    private $kindle;

    public function __construct(kindle $kindle){
        $this->kindle = $kindle;

    }

    public function openBook()
    {
        return $this->kindle->turOn();
    }

}