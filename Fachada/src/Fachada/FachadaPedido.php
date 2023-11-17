<?php

namespace src\Fachada;

use src\Classes\Autenticacao;
use src\Classes\ProcessamentoPedido;
use src\Classes\VerificarEstoque;

class FachadaPedido{
    private $autenticacao;
    private $verificarEstoque;
    private $processamentoPedido;

    public function __construct()
    {
        $this->autenticacao = new Autenticacao();
        $this->verificarEstoque = new VerificarEstoque();
        $this->processamentoPedido = new ProcessamentoPedido();
        
    }

    public function processarPedidoCompleto($user,$pass,$produtoId,$qtd,$pedido){

        $autenticado = $this->autenticacao->autenticar($user,$pass);

        if($autenticado){
            $estoqueDisponivel = $this->verificarEstoque->verificarDiponibilidade($produtoId,$qtd);

            if($estoqueDisponivel){
                return $this->processamentoPedido->processarPedido($pedido);
            }else{
                return "produto fora de estoque";
            }

        }else{
            return "falha na autenticacao";
        }
    }
}