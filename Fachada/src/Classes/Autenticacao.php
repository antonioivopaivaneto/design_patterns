<?php
namespace src\Classes;

class Autenticacao{
    public function autenticar($user, $pass){
        if($user != $pass){
            return false;
        }
        return true;
        
    }
}