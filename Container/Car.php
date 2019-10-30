<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/10/30
 * Time: 10:01
 */

namespace Fengzyz\DesignPatterns\Container;


class Car
{
    public function driveCar($type = '法拉利'){
        return "高富帅的{$type}";
    }
}