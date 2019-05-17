<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/17
 * Time: 22:53
 */
namespace Fengzyz\DesignPatterns\Observer;
interface Observable
{
    // 添加/注册观察者
    public function attach(Observer $observer);
    // 删除观察者
    public function detach(Observer $observer);
    // 触发通知
    public function notify();
}