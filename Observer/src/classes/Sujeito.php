<?php

namespace src\classes;

interface Sujeito{
    public function adicionarObservador(Observador $observador);
    public function removerObservador(Observador $observador);
    public function notiicarObservadores(String $mensagem);
}