<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/12/20
 * Time: 10:18
 */

namespace Fengzyz\DesignPatterns\Iterator;


interface IteratorInterface
{
    /**
     * 判断是否还有下一个
     *
     * @return mixed
     */
    public function hasNext();

    /**
     * 获取下一个
     *
     * @return mixed
     */
    public function next();
}