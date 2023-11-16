<?php

require_once __DIR__ . "/vendor/autoload.php";

use src\Log;
use src\soma;

$log = Log::getInstance();

echo $log->addCount(20);
echo $log->addCount(20);

echo "<br>================================<br>";


$soma = new soma();
echo $soma->soma(20);



?>