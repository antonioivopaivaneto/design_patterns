<?php
namespace src\Compressors;

class ZipCompressor implements Compressor{
    public function compress($file){
        echo 'comprimindo $file em formato Zip \n';
    }
}