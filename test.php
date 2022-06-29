<?php
require_once __DIR__.'/vendor/autoload.php';

use Manifold\commons\Matrix\Matrix;

$input = [[1, 2], [3, 4], [5, 7, 1]];

$matrix = new Matrix($input);

print_r($matrix);

//var_dump($matrix);

