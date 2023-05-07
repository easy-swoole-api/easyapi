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

namespace App\Command;

use EasySwoole\Command\AbstractInterface\CommandHelpInterface;
use EasySwoole\EasySwoole\Command\CommandInterface;

class EchoStrCommand implements CommandInterface
{
    public function exec(): ?string
    {
        echo "hello easyapi! ^_^\n";
        return '';
    }

    public function commandName(): string
    {
        return 'echo-str';
    }

    public function help(CommandHelpInterface $commandHelp): CommandHelpInterface
    {
        return $commandHelp;
    }

    public function desc(): string
    {
        return 'the command for echo string';
    }
}
