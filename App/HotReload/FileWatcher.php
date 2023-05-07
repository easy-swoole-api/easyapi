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

namespace App\HotReload;

use EasySwoole\EasySwoole\Logger;
use EasySwoole\EasySwoole\ServerManager;

class FileWatcher
{
    public static function onChange()
    {
        Logger::getInstance()->info('file change ,reload!!!');
        ServerManager::getInstance()->getSwooleServer()->reload();
    }
}
