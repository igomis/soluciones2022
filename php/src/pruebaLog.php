<?php

include_once __DIR__ ."/../vendor/autoload.php";

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Dwes\Monologs\HolaMonologs;

$log = new Logger("MiLogger");

$log->pushHandler(new StreamHandler("logs/milog.log", Logger::DEBUG));

$log->debug("Esto es un mensaje de DEBUG");
$log->info("Esto es un mensaje de INFO");
$log->warning("Esto es un mensaje de WARNING");
$log->error("Esto es un mensaje de ERROR");
$log->critical("Esto es un mensaje de CRITICAL");
$log->alert("Esto es un mensaje de ALERT");

$log = new HolaMonologs("Mi canal de salutacions errones", 26);
$log = new HolaMonologs("Mi canal de salutacions", 4);
$log->saludar();
$log = new HolaMonologs("Mi canal de salutacions", 14);
$log->saludar();
$log->acomiadar();
