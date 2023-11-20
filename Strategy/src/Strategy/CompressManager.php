<?php
namespace src\Strategy;

use src\Compressors\Compressor;

class CompressManager{
    private $compressor;

    public function setCompressor(Compressor $compressor){
        $this->compressor = $compressor;
        
    }

    public function compressFile($file){
        $this->compressor->compress($file);
    }
}


