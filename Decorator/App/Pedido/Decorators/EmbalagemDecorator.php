<?php

namespace App\Pedido\Decorators;

use App\Pedido\Pedido;

class EmbalagemDecorator implements Pedido {

    private $pedido;

    public function __construct(Pedido $pedido) {
        $this->pedido = $pedido;

    }

    public function descricao() : string{
        return $this->pedido->descricao() . " + Embalagem";
    }


}