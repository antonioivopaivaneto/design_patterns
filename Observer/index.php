<?php

use src\classes\Fornecedor;
use src\classes\Cliente;
use src\classes\LojaNotificacao;

include __DIR__.'./vendor/autoload.php';

$cliente1 = new Cliente("Joao");
$cliente2 = new Cliente("Maria");
$cliente3 = new Cliente("Junior");
$fornecedor1  = new Fornecedor("Apple");

$lojaNotificacoes = new LojaNotificacao();

$lojaNotificacoes->adicionarObservador($cliente1);
$lojaNotificacoes->adicionarObservador($cliente2);
$lojaNotificacoes->adicionarObservador($cliente3);
$lojaNotificacoes->adicionarObservador($fornecedor1);



$lojaNotificacoes->enviarNotificacao("Oferta especial: 20% de desconto hoje!!<br>");