<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/8/23
 * Time: 9:06
 */

namespace Fengzyz\DesignPatterns\Decorator;


class Latiao extends Decorator
{
    /**
     * 名称
     *
     * @return mixed|string
     */
    public function name()
    {
        return $this->food->name() . '+辣条';
    }

    /**
     * 价格
     *
     * @return int|mixed
     */
    public function price()
    {
        return $this->food->price() + 3;
    }
}