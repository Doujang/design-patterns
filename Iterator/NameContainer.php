<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/12/20
 * Time: 10:15
 */

namespace Fengzyz\DesignPatterns\Iterator;


class NameContainer implements ContainerInterface
{
    /**
     * @var array
     */
    protected $nameArray = [];

    /**
     * 增加一个名字
     *
     * @param $name
     *
     * @return mixed|void
     */
    public function add($name)
    {
        $this->nameArray[] = $name;
    }

    /**
     * 获取迭代器
     */
    public function getIterator()
    {
        return new NameIterator($this->nameArray);
    }
}