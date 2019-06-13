<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/6/14
 * Time: 6:47
 */

namespace Fengzyz\DesignPatterns\php\Proxy;


class RealSubject implements Subject
{
    /**
     * 执行
     */
    public function action()
    {
        // TODO: Implement action() method.
        echo '执行操作';
    }
}