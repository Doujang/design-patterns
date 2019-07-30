<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/7/30
 * Time: 10:56
 */

namespace Fengzyz\DesignPatterns\SimpleFactory;


class Tiger extends Animal
{
    public function run()
    {
        $this->setName("老虎");
        echo "这是一只森林之王！！".$this->getName();
    }
}