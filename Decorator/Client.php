<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/8/23
 * Time: 8:55
 */

namespace Fengzyz\DesignPatterns\Decorator;
require __DIR__.'/../vendor/autoload.php';

class Client
{
    public function run()
    {
        // 手抓饼
        $shouzhuabing = new Shouzhuabing();
        echo $shouzhuabing->name();
        echo $shouzhuabing->price() . '元';
        echo '<hr>';

        // 烤冷面
        $kaolengmian = new Kaolengmian();
        echo $kaolengmian->name();
        echo $kaolengmian->price() . '元';
        echo '<hr>';
    }
}
$client = new Client();
$client->run();