<?php

namespace App\Pedido;

class PedidoBasico implements Pedido {

    public function descricao() : string{
        return 'pedido_basico';
    }


}