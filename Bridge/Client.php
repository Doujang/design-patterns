<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/12/30
 * Time: 17:09
 */

namespace Fengzyz\DesignPatterns\Bridge;
require __DIR__.'/../vendor/autoload.php';
/**
 * 客户端
 * Class Client
 * @package Fengzyz\DesignPatterns\Bridge
 */
class Client
{
    //运行
    public function rum(){

        $red = new Red();
        $yellow = new Yellow();

        // 红色的正方形
        $redSquare = new Square($red);
        $redSquare->draw();
        echo '<hr>';

        // 黄色的正方形
        $yellowSquare = new Square($yellow);
        $yellowSquare->draw();
        echo '<hr>';
    }
}

$client = new Client();
$client->rum();
