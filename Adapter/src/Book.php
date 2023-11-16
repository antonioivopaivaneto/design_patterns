<?php


namespace src;

use src\Interfaces\BookInterface;

class Book implements BookInterface{
    public function openBook(){
        return "abrindo livro ..";
    }
    
}