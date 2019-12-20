<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/12/20
 * Time: 10:18
 */

namespace Fengzyz\DesignPatterns\Iterator;


class NameIterator implements IteratorInterface
{

    /**
     * @var array
     */
    protected $nameArray = [];

    /**
     * @var int
     */
    protected $index = 0;


    public function __construct($nameArray)
    {
        $this->nameArray = $nameArray;
    }
    /**
     * 判断是否还有下一个
     *
     * @return mixed
     */
    public function hasNext()
    {
        return $this->index < count($this->nameArray);
    }

    /**
     * 获取下一个
     *
     * @return mixed
     */
    public function next()
    {
        return $this->index < count($this->nameArray);
    }
}