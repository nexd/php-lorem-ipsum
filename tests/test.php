<?php

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use Lorem\Ipsum;

echo "*** Paragraphs ***".PHP_EOL;
echo Ipsum::paragraphs();

echo PHP_EOL . PHP_EOL;

echo "*** Sentences ***".PHP_EOL;
echo Ipsum::sentences();

echo PHP_EOL . PHP_EOL;

echo "*** Words ***".PHP_EOL;
echo Ipsum::words();

echo PHP_EOL . PHP_EOL;

echo "*** Title ***".PHP_EOL;
echo Ipsum::title();

echo PHP_EOL . PHP_EOL;