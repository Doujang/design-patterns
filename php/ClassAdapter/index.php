<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/6/16
 * Time: 22:47
 */
namespace Fengzyz\DesignPatterns\php\ClassAdapter;
require __DIR__.'../../vendor/autoload.php';

class Client
{
    /**
     * 运行
     */
    public function run()
    {
        // 原本的类的
        $adaptee = new Adaptee();
        $adaptee->pay();
        echo '<br>';
        // 适配器
        $adapter = new Adapter();
        $adapter->pay();
        echo '<br>';
        $adapter->notify();
    }
}
$client = new Client();
$client->run();