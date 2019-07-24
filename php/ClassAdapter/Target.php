<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/6/16
 * Time: 22:44
 */

namespace Fengzyz\DesignPatterns\php\ClassAdapter;


interface Target
{
    //支付
    public function pay();
    //通知
    public function notify();
}