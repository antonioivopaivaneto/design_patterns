<?php
include __DIR__.'./vendor/autoload.php';

use src\Fachada\FachadaPedido;

$fachadaPedido = new FachadaPedido();
$user = "123";
$pass = "123";
$produtoId = 1;
$qtd = 5;
$pedido = "pedido XS";

$resultado = $fachadaPedido->processarPedidoCompleto($user, $pass, $produtoId, $qtd,$pedido);


echo $resultado;




