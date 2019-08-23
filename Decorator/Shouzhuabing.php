<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/8/23
 * Time: 8:52
 */

namespace Fengzyz\DesignPatterns\Decorator;


class Shouzhuabing implements Food
{

    /**
     * 名称
     * @return mixed
     */
    public function name()
    {
        return '手抓饼';
    }

    /**
     * 价格
     * @return mixed
     */
    public function price()
    {
        return 10;
    }
}