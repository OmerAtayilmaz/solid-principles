<?php
require_once 'vendor/autoload.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use App\S\SaleReport;

$obj = new SaleReport(new App\S\SaleRepositories());

$obj->format();
