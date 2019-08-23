<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/8/23
 * Time: 9:05
 */

namespace Fengzyz\DesignPatterns\Decorator;


class Egg extends Decorator
{
    /**
     * 名称
     *
     * @return mixed|string
     */
    public function name()
    {
        return $this->food->name() . '+蛋';
    }

    /**
     * 价格
     *
     * @return int|mixed
     */
    public function price()
    {
        return $this->food->price() + 1;
    }
}