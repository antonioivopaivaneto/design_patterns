<?php

use src\Adapters\kindleAdapter;
use src\Book;
use src\Kindle;

include __DIR__.'./vendor/autoload.php';

$book = new Book();
echo $book->openBook();


echo "<br>";

$kindle = new Kindle();
$kindleAdapter = new kindleAdapter($kindle);
echo $kindleAdapter->openBook();