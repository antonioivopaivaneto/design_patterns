<?php

namespace src\classes;

class Cliente implements Observador{
    private $nome;

    public function __construct($nome)
    {
        $this->nome = $nome;
    }
    
    public function notificar(String $mensagem){
        echo "[$this->nome] Nova notificação : $mensagem";
    }
}