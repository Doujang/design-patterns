<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/8/23
 * Time: 9:13
 */

namespace Fengzyz\DesignPatterns\Prototype;
require __DIR__.'/../vendor/autoload.php';

class Client
{
    /**
     * 浅复制
     */
    public function shallowCopy()
    {
        $car = new Car();
        $car->name = '特斯拉';
        $shallowDrive = new ShallowDrive();
        $shallowDrive->setCar($car);
        $shallowDrive->show();

        $cloneDrive = clone $shallowDrive;
        $cloneDrive->show();
    }
}
$client = new Client();
$client->shallowCopy();