<?php

namespace src\Classes;

class VerificarEstoque{
    public function verificarDiponibilidade($produtoId, $qtd){
        if($qtd >200){
            return false;
        }
      
        return true;
        
    }
}