<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/7/30
 * Time: 10:59
 */

namespace Fengzyz\DesignPatterns\SimpleFactory;


class Fish extends Animal
{
    public function run()
    {
        $this->setName("鱼");
        echo "这是一只水里游的".$this->getName();
    }
}