<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/12/20
 * Time: 10:37
 */

namespace Fengzyz\DesignPatterns\Template;
require __DIR__.'/../vendor/autoload.php';


/**
 * 客户端
 * Class Client
 * @package Fengzyz\DesignPatterns\Template
 */
class Client
{
    /**
     * 运行
     */
    public function run()
    {
        $xiaomi = new Xiaomi();
        $xiaomi->action();

        echo '<hr>';

        $google = new Google();
        $google->action();
    }
}

$client = new Client();
$client->run();