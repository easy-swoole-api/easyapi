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
    'redis' => [
        'default' => [
            'driver_class'      => \EasySwoole\RedisPool\RedisPool::class,
            'host'              => '127.0.0.1',
            'port'              => 6379,
            'auth'              => '',
            'timeout'           => 3,
            'reconnectTimes'    => 3,
            'db'                => 0,
            'serialize'         => 0,
            'packageMaxLength'  => 2097152,
            'intervalCheckTime' => 15000,
            'maxIdleTime'       => 10,
            'maxObjectNum'      => 20,
            'minObjectNum'      => 5,
            'getObjectTimeout'  => 3,
            'loadAverageTime'   => 0.001,
        ],
    ],
];
