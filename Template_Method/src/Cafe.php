<?php
namespace src;

class Cafe extends BebidaQuente {

    protected function adicionarIngredientes()
    {
        echo "Adicinando café moido na hora<br>";
    }

    protected function adicionarCondimentos()
    {
        echo "Adicinando pouco açucar e leite<br>";
    }
}