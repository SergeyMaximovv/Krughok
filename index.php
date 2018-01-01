<?php
use Monolog\Logger;
require 'vendor/autoload.php';
$logger=new Logger("Test");
$logger->log(logger::WARNING, "Привет всем!");
           