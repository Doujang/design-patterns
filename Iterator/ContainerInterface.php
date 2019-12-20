<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/12/20
 * Time: 10:14
 */

namespace Fengzyz\DesignPatterns\Iterator;

/**
 * Class ContainerInterface
 * 容器接口
 * @package Fengzyz\DesignPatterns\Iterator
 */
interface ContainerInterface
{
    /**
     * 增加一个名字
     *
     * @param $name
     *
     * @return mixed
     */
    public function add($name);

    /**
     * 获取迭代器
     *
     * @return mixed
     */
    public function getIterator();
}