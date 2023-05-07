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
return [
    'crontab' => [
        [
            'enable'      => false,
            'temp_dir'    => ROOT_PATH . '/Temp',
            'server_name' => 'EASYSWOOLE',
            'worker_num'  => 3,
            'class'       => ''
        ]
    ]
];
