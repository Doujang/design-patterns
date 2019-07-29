<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/7/26
 * Time: 15:43
 */

namespace Fengzyz\DesignPatterns\DI;


class FileLog implements Log
{
    public function write()
    {
        echo "写入文件日志....";
    }
}