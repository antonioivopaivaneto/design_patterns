<?php

use src\Compressors\RarCompressor;
use src\Compressors\ZipCompressor;
use src\Strategy\CompressManager;

require_once __DIR__ . "/vendor/autoload.php";

$compressManeger = new CompressManager();

$zipCompressor = new ZipCompressor();
$compressManeger->setCompressor($zipCompressor);
$compressManeger->compressFile("arquivo.text");


echo "<br>Compressing<br>";

$rarCompressor = new RarCompressor();
$compressManeger->setCompressor($rarCompressor);
$compressManeger->compressFile("arquivo.txt");