<?php
// 全局bootstrap事件
use EasyApi\Library\App as EasyApiApp;
use EasySwoole\EasySwoole\Core as ESCore;

if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', dirname(__FILE__));
}
EasyApiApp::initGlobalConst();

$defaultTimezone = easy_config('app.default_timezone');
date_default_timezone_set($defaultTimezone);

// \Co::set(['hook_flags' => SWOOLE_HOOK_ALL]);

// 命令行支持调用初始化事件
$specialCommands = [
    'server',
    'task',
    'crontab',
    'process',
];
if ($argc >= 2) {
    if (!in_array($argv[1], $specialCommands)) {
        ESCore::getInstance()->initialize();
    }
}

// 注册自定义命令
EasyApiApp::registerCommand();
