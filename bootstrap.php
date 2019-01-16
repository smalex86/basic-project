<?php

require_once __DIR__ . '/vendor/autoload.php';

// путь файлов конфигурации
$configPath = __DIR__ . '/config/'; 
// загрузка файлов конфигурации
$config = [];
$files = glob($configPath . '*.php');
foreach ($files as $file) {
  $config = array_merge($config, include $file);
}
// объект конфигурации
$configObj = new ArrayObject($config, ArrayObject::ARRAY_AS_PROPS);

use smalex86\logger\Logger;

$logger = new Logger();
$logger->routeList->attach(new smalex86\logger\route\FileRoute([
    'isEnabled' => true,
    'maxLevel' => $configObj->logger['fileLevel'],
    'logFile' => $configObj->logger['logFile'],
    'folder' => $configObj->logger['folder'],
    'dateFormat' => $configObj->logger['dateFormat']
]));
