<?php

use App\O\AreaCalculator;
use App\O\Circle;
use App\O\Square;

require_once 'vendor/autoload.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/*SRP
use App\S\SaleReport;

$obj = new SaleReport(new App\S\SaleRepositories());

$obj->format(new App\S\JsonOutput());
*/


$sq = new Square(5, 5);
$circle = new Circle(3);
$areaCalculator = new AreaCalculator();

echo $areaCalculator->calculate([$sq,$circle]);
