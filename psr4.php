<?php
/**
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
 *
 * 如果如上use 了相应的命名空间，下面的代码可以简写
 * $log = new Logger('name');
   $log->pushHandler(new StreamHandler('app.log', Monolog\Logger::WARNING));
   $log->addWarning('Foo');
 * */

require(__DIR__ . '/vendor/autoload.php');
/*
 * 根据博文中(http://www.vincentguo.cn/default/173.html)介绍的，使用PSR-4规则自动加载
 * 按照配置的规则
 * "autoload": {
        "psr-4": {"Monolog\\": "src/Monolog"}
    }
 * Monolog\Logger => src/Monolog/Logger.php
 * Monolog\Handler\StreamHandler => src/Monolog/Handler/StreamHandler.php
 * */

$log = new Monolog\Logger('name');
$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
$log->addWarning('Foo');