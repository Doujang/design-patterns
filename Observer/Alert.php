<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/7/24
 * Time: 11:08
 */

namespace Fengzyz\DesignPatterns\Observer;


class Alert implements Observer
{
    public function update(Observable $observable)
    {
        // TODO: Implement update() method.
        echo '系统消息：您的订单有更新了~~~';
    }
}