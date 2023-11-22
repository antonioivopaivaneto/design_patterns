<?php

namespace src;

abstract class BebidaQuente{

    final public function preparar(){
        $this->ferverAgua();
        $this->adicionarIngredientes();
        $this->despejaNaXicara();
        $this->adicionarCondimentos();
        
    }
    //method abstract implements Be subclass
    abstract protected function adicionarIngredientes();
    abstract protected function adicionarCondimentos();

    //metodos comuns
    private function ferverAgua(){
        echo "Fervendo agua <br>";
    }

    private function despejaNaXicara(){
        echo 'Despejando na xicara<br>';
    }
}
