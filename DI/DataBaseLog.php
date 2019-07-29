<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/7/26
 * Time: 15:44
 */

namespace Fengzyz\DesignPatterns\DI;


class DataBaseLog implements Log
{
    public function write()
    {
        echo "写入数据库日志....";
    }
}