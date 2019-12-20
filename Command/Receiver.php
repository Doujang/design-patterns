<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/12/20
 * Time: 10:26
 */

namespace Fengzyz\DesignPatterns\Command;

/**
 * 命令接收者
 * Class Receiver
 * @package Fengzyz\DesignPatterns\Command
 */
class Receiver
{
    /**
     * 执行操作
     */
    public function action()
    {
        echo '执行操作';
    }
}