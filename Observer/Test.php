<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/20
 * Time: 22:37
 */

namespace Fengzyz\DesignPatterns\php\Observer;

class Test
{
    /**
     * 运行
     */
    public function run()
    {
        // 创建观察者对象
        $email = new Email();
        $message = new Message();
        $log = new Log();
        // 创建订单对象
        $order = new Order();

        // 向订单对象中注册3个观察者：发送邮件、短信通知、记录日志
        $order->attach($email);
        $order->attach($message);
        $order->attach($log);
        // 添加订单，添加时会自动发送通知给观察者
        $order->addOrder();

        echo '<br />';

        // 删除记录日志观察者
        $order->detach($log);
        // 添加另一个订单，会再次发送通知给观察着
        $order->addOrder();
    }
}
$test = new Test();
$test->run();