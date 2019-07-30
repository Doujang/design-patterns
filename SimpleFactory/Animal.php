<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/7/30
 * Time: 10:46
 */

namespace Fengzyz\DesignPatterns\SimpleFactory;


abstract class Animal
{
    //名称
    protected $name = '';

    /**
     * 动物的行为
     * @return mixed
     */
    abstract public function run();

    /**
     * 给动物命名
     * @param $name
     */
    public function setName($name){
        $this->name = $name;
    }

    /**
     * 返回动物名称
     * @return string
     */
    public function getName(){
        return $this->name;
    }
}