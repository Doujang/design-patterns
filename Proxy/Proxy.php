<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/6/14
 * Time: 6:49
 */

namespace Fengzyz\DesignPatterns\php\Proxy;


class Proxy  implements  Subject
{
    protected $realSubject;//主题
    public function action()
    {
        // TODO: Implement action() method.
        $this->realSubject->action();
    }
    public function __construct()
    {
        $this->realSubject = new RealSubject();
    }
}