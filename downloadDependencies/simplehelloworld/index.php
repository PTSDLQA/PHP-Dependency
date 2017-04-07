<?php
require_once __DIR__ . '/vendor/autoload.php';

//Используем микрофреймворк Silex
$timer = new TimerClass();

//Функция get_ip() определена в библиотеке super_lib.
//Благодаря сгенерированному autoloader.php нужный файл библиотеки подключится автоматически
$ip = get_ip();

$templateVars = array(
    'msg' => 'Super Hello World',
    'time' => $timer->getCurrentTime(),
    'ip' => $ip
);


