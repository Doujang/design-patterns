<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/6/14
 * Time: 7:04
 */

namespace Fengzyz\DesignPatterns\php\Proxy;

require __DIR__.'/../vendor/autoload.php';

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