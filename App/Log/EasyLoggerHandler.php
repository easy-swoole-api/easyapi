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

namespace App\Log;

use EasySwoole\Log\LoggerInterface;
use EasySwoole\Utility\File;

class EasyLoggerHandler implements LoggerInterface
{
    private $logDir;

    function __construct(string $logDir = null)
    {
        if (empty($logDir)) {
            $logDir = EASYSWOOLE_ROOT . DIRECTORY_SEPARATOR . '/Log';
            if (!is_dir($logDir)) {
                File::createDirectory($logDir);
            }
        }
        $this->logDir = $logDir;
    }

    function log(?string $msg, int $logLevel = self::LOG_LEVEL_INFO, string $category = 'debug'): string
    {
        $prefix = date('d');
        $date = date('Y-m-d H:i:s');
        $levelStr = $this->levelMap($logLevel);

        $yearMonth = date('Ym');

        $logDir = $this->logDir . DIRECTORY_SEPARATOR . $yearMonth;
        if (!is_dir($logDir)) {
            File::createDirectory($logDir);
        }

        $filePath = $logDir . "/{$prefix}.log";
        $str = "[{$date}][{$category}][{$levelStr}]:[{$msg}]\n";
        $sep = "---------------------------------------------------------------\r\n";
        file_put_contents($filePath, "{$sep}{$str}", FILE_APPEND | LOCK_EX);
        return $str;
    }

    function console(?string $msg, int $logLevel = self::LOG_LEVEL_INFO, string $category = 'console')
    {
        $date = date('Y-m-d H:i:s');
        $levelStr = $this->levelMap($logLevel);
        echo "[{$date}][{$category}][{$levelStr}]:[{$msg}]\n";
    }

    private function levelMap(int $level)
    {
        switch ($level) {
            case self::LOG_LEVEL_DEBUG:
                return 'debug';
            case self::LOG_LEVEL_INFO:
                return 'info';
            case self::LOG_LEVEL_NOTICE:
                return 'notice';
            case self::LOG_LEVEL_WARNING:
                return 'warning';
            case self::LOG_LEVEL_ERROR:
                return 'error';
            default:
                return 'unknown';
        }
    }
}
