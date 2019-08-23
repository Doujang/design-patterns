<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/8/23
 * Time: 9:11
 */

namespace Fengzyz\DesignPatterns\Prototype;


class Car
{
    /**
     * 车名
     *
     * @var
     */
    public $name;

    /**
     * 设置车名
     *
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}