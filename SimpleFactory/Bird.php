<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/7/30
 * Time: 10:52
 */

namespace Fengzyz\DesignPatterns\SimpleFactory;


class Bird  extends Animal
{
    public function run()
    {
        $this->setName("鸟");
        echo "这是一只会飞的".$this->getName();
    }
}