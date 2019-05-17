<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/17
 * Time: 22:57
 */
namespace Fengzyz\DesignPatterns\Observer;
class Message implements Observer
{
    public function update(Observable $observable)
    {
        $state = $observable->getState();
        if ($state) {
            echo '短信通知：您已下单成功。';
        } else {
            echo '短信通知：下单失败，请重试。';
        }
    }
}