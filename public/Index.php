<?php

use controller\MatchinTestController;

require_once __DIR__ . '/../vendor/autoload.php';
 
$solution = new MatchinTestController();

echo "===================Solution 1======================<br>";

$solution->solutionOne(2,8);

echo "===================Solution 2======================<br>";

echo $solution->solutionTow([[7,8],[1,2],[6,5]]);


