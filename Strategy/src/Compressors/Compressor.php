<?php
namespace src\Compressors;

interface Compressor{
    public function compress($file);
}