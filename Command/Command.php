<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/12/20
 * Time: 10:24
 */

namespace Fengzyz\DesignPatterns\Command;


/**
 * 具体命令类
 * Class Command
 * @package Fengzyz\DesignPatterns\Command
 */
class Command implements CommandInterface
{

    protected $receiver;
    /**
     * @return mixed
     */
    public function __construct(Receiver $receiver)
    {
        $this->receiver = $receiver;
    }


    public function execute()
    {
        $this->receiver->action();
    }
}