<?php

namespace App\Pedido;

class PedidoAtacado implements Pedido {

    public function descricao() : string{
        return 'pedido para atacado';
    }


}