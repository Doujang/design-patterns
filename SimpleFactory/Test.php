<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/7/30
 * Time: 13:42
 */

namespace Fengzyz\DesignPatterns\SimpleFactory;


require __DIR__.'/../vendor/autoload.php';

class Client
{
    public function bird(){
        $factory = new Factory();
        $operation   = $factory->create("鸟");
        $operation->run();
    }
}
$client = new Client();
$client->bird();