<?php
namespace src\classes;

class LojaNotificacao implements Sujeito{
    private $observadores = [];

    public function adicionarObservador(Observador $observador){
        $this->observadores[] = $observador;
    }

    public function removerObservador(Observador $observador)
    {
        $index = array_search($observador, $this->observadores);
        if($index !== false){
            unset($this->observadores[$index]);
        }
    }

    public function notiicarObservadores(string $mensagem)
    {
        foreach($this->observadores as $observador){
            $observador->notificar($mensagem);
        }
    }

    public function enviarNotificacao(string $mensagem) {
        $this->notiicarObservadores($mensagem);
    }
}