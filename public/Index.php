<?php

use controller\MatchinTestController;

require_once __DIR__ . '/../vendor/autoload.php';
 
$solution = new MatchinTestController();

$solution->solutionOne(2,8);
