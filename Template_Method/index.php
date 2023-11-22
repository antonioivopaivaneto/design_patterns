<?php

use src\Cafe;
use src\cha;

require_once __DIR__ . "/vendor/autoload.php";


echo "<b>Preparando café:</b><br>";
$cafe = new Cafe();
$cafe->preparar();

echo "<br>";


echo "<b>Preparando chá:</b><br>";
$cafe = new cha();
$cafe->preparar();

