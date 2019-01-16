<?php

/**
 * Массив с настройками Logger
 */
$conf['logger'] = [
    'fileLevel'      => 7,
    'consoleLevel' => 5,
    'logFile'   => 'default.log',
    'folder'     => dirname(__DIR__) . '/logs/',
    'dateFormat' => 'Y-m-d H:i:s:v T',
    'printPid'   => 'true'
];

return $conf;
