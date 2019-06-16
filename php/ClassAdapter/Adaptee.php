<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/6/16
 * Time: 22:44
 */

namespace Fengzyz\DesignPatterns\php\ClassAdapter;


class Adaptee
{
    /**
     * 金额
     *
     * @var string
     */
    public $money = '￥34';
    /**
     * 支付
     */
    public function pay()
    {
        echo '支付' . $this->money;
    }
}