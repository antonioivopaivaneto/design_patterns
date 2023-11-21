<?php

namespace src\classes;

interface Observador{
    public function notificar(string $mensagem);
}