<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/6/16
 * Time: 22:37
 */

namespace Fengzyz\DesignPatterns\php\Proxy;

class Client
{
    /**
     * 运行
     */
    public function run()
    {
        $proxy = new Proxy();
        $proxy->action();
    }
}

$client = new Client();
$client->run();