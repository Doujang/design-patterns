<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/7/26
 * Time: 15:45
 */

namespace Fengzyz\DesignPatterns\DI;

//用户登录类
class User
{
    protected $log;

    public function __construct(Log $log)
    {
        $this->log = $log;
    }

    public function login(){
        echo "登录成功...";
        $this->log->write();
    }
}