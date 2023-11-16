<?php

namespace src;

class Log{

    private static $instance = null;
    private static $counter;

    public static function addCount(Int $number){
        return self::$counter += $number;

    }
    
    private function __clone()
    {
        
    }

    private function __construct()
    {
        
    }

   

    public static function getInstance()
    {
        if(self::$instance === null){
            self::$instance = new self();
        }

        return self::$instance;
    }



}


