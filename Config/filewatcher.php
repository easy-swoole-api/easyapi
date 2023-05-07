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

use App\HotReload\FileWatcher;

return [
    'file_watcher' => [
        'enable'            => true,
        'allow_mode'        => ['dev'],
        'monitor_dir'       => EASYSWOOLE_ROOT . "/App",
        'on_change_handler' => [FileWatcher::class, 'onChange'],
    ]
];
