<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/17
 * Time: 22:56
 */
namespace Fengzyz\DesignPatterns\Observer;
interface Observer
{
    // 接收到通知的处理方法
    public function update(Observable $observable);
}