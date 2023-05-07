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

namespace App\Router;

use EasyApi\Library\Route\RouterInterface;
use EasySwoole\Http\Request;
use EasySwoole\Http\Response;
use FastRoute\RouteCollector;

class HomeRouter implements RouterInterface
{
    /**
     * @param RouteCollector $routeCollector
     */
    public function register(&$routeCollector)
    {
        $routeCollector->get('/xuesi', function (Request $request, Response $response) {
            $response->write("i am xuesi");
            return false;
        });

        $routeCollector->addRoute(['GET', 'POST'], '/home', '/Home/Home/home');
    }
}
