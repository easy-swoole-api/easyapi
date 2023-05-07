<?php
/**
 * This file is part of EasySwoole-Api.
 *
 * @link     https://www.easyswoole.com
 * @document https://www.easyswoole.com
 * @contact  1592328848@qq.com
 * @license  https://github.com/easy-swoole-api/easyswoole-api/blob/main/LICENSE
 */
declare(strict_types=1);

namespace App\Controller;

use EasySwoole\Http\AbstractInterface\AbstractRouter;
use EasySwoole\Http\Request;
use EasySwoole\Http\Response;
use FastRoute\RouteCollector;
use EasyApi\Library\Route\Router as EasyApiRouter;

class Router extends AbstractRouter
{
    function initialize(RouteCollector $routeCollector)
    {
        // 初始化路由
        EasyApiRouter::init($routeCollector);

//        $routeCollector->get('/router', '/test');
//        $routeCollector->get('/closure', function (Request $request, Response $response) {
//            $response->write('this is closure router');
//            // 不再进入控制器解析
//            return false;
//        });
    }
}
