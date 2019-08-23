<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/8/23
 * Time: 8:50
 */

namespace Fengzyz\DesignPatterns\Decorator;


interface Food
{
    /**
     * 名称
     * @return mixed
     */
    public function name();

    /**
     * 价格
     * @return mixed
     */
    public function price();

}