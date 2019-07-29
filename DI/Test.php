<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/7/26
 * Time: 16:05
 */

namespace Fengzyz\DesignPatterns\DI;

require __DIR__.'/../vendor/autoload.php';
class Client
{
    /**
     * 运行
     */
    public function run()
    {
        //实例化IoC容器
        $ioc = new Ioc();
        $ioc->bind('log','FileLog');
        $ioc->bind('user','User');
        $user = $ioc->make('user');
        $user->login();
    }
}
$test = new Client();
$test->run();