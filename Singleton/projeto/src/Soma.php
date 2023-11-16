<?php

namespace src;

use src\Log;

class soma{

    public function soma(int $num){
        $log = Log::getInstance();
        return $log->addCount($num);
    }
}

