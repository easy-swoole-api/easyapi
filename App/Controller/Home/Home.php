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

namespace App\Controller\Home;

use App\Controller\BaseController;
use EasyApi\Library\Response;
use EasySwoole\EasySwoole\Logger;

class Home extends BaseController
{
    public function home()
    {
//        Logger::getInstance()->info('123');
//        var_dump(easy_config('xuesi.xxx'));
//        var_dump(lang('hello_easy_api'));
//        var_dump(lang('hello_easy_api', 'en'));
//        echo 'post' . "\n";
//        var_dump($this->_request->post());
//        echo 'get' . "\n";
//        var_dump($this->_request->get());
//        echo 'param' . "\n";
//        var_dump($this->_request->param());

        return Response::create()
            ->header('n')
            ->content(123)
            ->send();
//        return json(['name' => 123]);
//        return $this->writeJson(200, 'ok', 'ok');
    }
}
