<?php

namespace src\classes;

class Fornecedor implements Observador{

    private $nome;


    public function __construct(String $nome){
        $this->nome = $nome;
    }

    public function notificar(string $mensagem)
    {
        echo "Fornecedor $this->nome: $mensagem";
    }
    
}
