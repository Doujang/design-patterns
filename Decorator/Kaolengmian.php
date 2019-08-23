<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/8/23
 * Time: 8:53
 */

namespace Fengzyz\DesignPatterns\Decorator;


class Kaolengmian implements Food
{

    /**
     * 名称
     * @return mixed
     */
    public function name()
    {
        return "烤面包";
    }

    /**
     * 价格
     * @return mixed
     */
    public function price()
    {
        return 5;
    }
}