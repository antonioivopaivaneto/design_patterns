<?php

use App\Pedido\Decorators\EmbalagemDecorator;
use App\Pedido\PedidoAtacado;
use App\Pedido\PedidoBasico;

include __DIR__.'/vendor/autoload.php';


$pedidoBasico = new PedidoBasico();
echo $pedidoBasico->descricao();

echo '<br>________________________________________________________<br>';

$pedidoEmbalagem = new EmbalagemDecorator($pedidoBasico);
echo $pedidoEmbalagem->descricao();
echo '<br>________________________________________________________<br>';

$pedidoEmbalagem = new EmbalagemDecorator( new PedidoAtacado());
echo $pedidoEmbalagem->descricao();