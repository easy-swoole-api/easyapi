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

use EasySwoole\Component\Process\Config as ESProcessConfig;

return [
    'processes' => [
        [
            'enable'                => false,
            'process_name'          => '',
            'process_group'         => '',
            'arg'                   => [],
            'redirect_stdin_stdout' => false,
            'pipe_type'             => ESProcessConfig::PIPE_TYPE_SOCK_DGRAM,
            'enable_coroutine'      => false,
            'max_exit_wait_time'    => 3,
            'class'                 => \App\Process\EchoProcess::class,
        ]
    ]
];
