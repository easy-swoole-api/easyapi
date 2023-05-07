<?php

namespace EasySwoole\EasySwoole;

use EasyApi\Library\App as EasyApiApp;
use EasySwoole\Component\Di;
use EasySwoole\EasySwoole\AbstractInterface\Event;
use EasySwoole\EasySwoole\Swoole\EventRegister;
use EasySwoole\Http\Request;
use EasySwoole\Http\Response;

class EasySwooleEvent implements Event
{
    public static function initialize()
    {
        $defaultTimezone = easy_config('app.default_timezone');
        date_default_timezone_set($defaultTimezone);

        // 初始化框架的一些基础配置
        EasyApiApp::initialize();

        Di::getInstance()->set(SysConst::HTTP_GLOBAL_ON_REQUEST, function (Request $request, Response $response): bool {
            return EasyApiApp::initHttpGlobalOnRequest($request, $response);
        });

        Di::getInstance()->set(SysConst::HTTP_GLOBAL_AFTER_REQUEST, function (Request $request, Response $response): void {
            EasyApiApp::initHttpGlobalAfterRequest($request, $response);
        });
    }

    public static function mainServerCreate(EventRegister $register)
    {
        // 初始化配置
        EasyApiApp::initMainServerCreate();
    }
}
