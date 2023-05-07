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
    'database' => [
        'default' => [
            'driver_class'      => \EasySwoole\ORM\DbManager::class,
            'host'              => '127.0.0.1',
            'port'              => 3306,
            'user'              => 'root',
            'password'          => 'woaiyouxi',
            'timeout'           => 45,
            'charset'           => 'utf8mb4',
            'database'          => 'easyapi',
            'autoPing'          => 5,
            'strict_type'       => false,
            'fetch_mode'        => false,
            'maxReconnectTimes' => 3,
            'intervalCheckTime' => 15000,
            'maxIdleTime'       => 10,
            'maxObjectNum'      => 50,
            'minObjectNum'      => 10,
            'getObjectTimeout'  => 3,
            'loadAverageTime'   => 0.001,
        ],
    ],
];
