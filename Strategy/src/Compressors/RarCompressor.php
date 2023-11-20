<?php
namespace src\Compressors;

class RarCompressor implements Compressor{
    public function compress($file){
        echo 'comprimindo $file em formato Rar \n';
    }
}