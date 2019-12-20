<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/12/20
 * Time: 10:21
 */

namespace Fengzyz\DesignPatterns\Iterator;
require __DIR__.'/../vendor/autoload.php';

/**
 * 客户端
 * Class Client
 * @package Fengzyz\DesignPatterns\Iterator
 */
class Client
{
    /**
     * 运行
     */
    public function run()
    {
        $nameContainer = new NameContainer();
        $nameContainer->add('张三');
        $nameContainer->add('李四');
        $nameContainer->add('王麻子');

        $nameIterator = $nameContainer->getIterator();

        while ($nameIterator->hasNext()) {
            echo $nameIterator->next();
        }
    }
}
$client = new Client();
$client->run();