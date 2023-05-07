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

namespace App\Exception;

use EasySwoole\EasySwoole\Trigger as ESTrigger;
use EasySwoole\Http\Message\Status;
use EasySwoole\Http\Request as ESRequst;
use EasySwoole\Http\Response as ESResponse;
use Throwable;

class EasyHttpExceptionHandler
{
    public static function handler(Throwable $throwable, ESRequst $request, ESResponse $response)
    {
        $response->withStatus(Status::CODE_INTERNAL_SERVER_ERROR);
        $response->write(nl2br($throwable->getMessage() . "\n" . $throwable->getTraceAsString()));
        ESTrigger::getInstance()->throwable($throwable);
    }
}
