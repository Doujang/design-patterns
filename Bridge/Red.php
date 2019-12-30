<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/12/30
 * Time: 17:03
 */

namespace Fengzyz\DesignPatterns\Bridge;

/**
 * 红色类
 * Class Red
 * @package Fengzyz\DesignPatterns\Bridge
 */
class Red extends Color
{

    public function rum()
    {
        echo "红色";
    }
}