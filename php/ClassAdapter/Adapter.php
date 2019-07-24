<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/6/16
 * Time: 22:43
 */

namespace Fengzyz\DesignPatterns\php\ClassAdapter;


class Adapter extends Adaptee implements Target
{
    /**
     * Adapter constructor.
     */
    public function __construct()
    {
        $this->money = '$5';
    }
    /**
     * 通知
     */
    public function notify()
    {
        echo '通知';
    }
}