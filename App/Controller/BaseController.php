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

use EasySwoole\Http\AbstractInterface\Controller;
use EasyApi\Library\Request;
use EasySwoole\Http\Message\Status as HttpStatusCode;

class BaseController extends Controller
{
    /** @var Request */
    protected $_request;

    protected function onRequest(?string $action): ?bool
    {
        $this->_request = new Request($this->request());

        if (!$this->initialize()) {
            return false;
        }

        return parent::onRequest($action);
    }

    protected function initialize(): bool
    {
        return true;
    }

    protected function actionNotFound(?string $action)
    {
        $this->response()->withStatus(HttpStatusCode::CODE_NOT_FOUND);
        $this->response()->withHeader('Content-Type', 'text/html;charset=utf-8');
        $this->response()->write('not found!');
    }

    public function onException(\Throwable $throwable): void
    {
        parent::onException($throwable);
    }
}
