<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/17
 * Time: 22:56
 */
namespace Fengzyz\DesignPatterns\Observer;

class Email implements Observer
{

    public function update(Observable $observable)
    {
        $state = $observable->getState();
        if ($state) {
            echo '发送邮件：您已经成功下单。';
        } else {
            echo '发送邮件：下单失败，请重试。';
        }
    }
}