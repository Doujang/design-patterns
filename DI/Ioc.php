<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/7/26
 * Time: 15:51
 */

namespace Fengzyz\DesignPatterns\DI;


class Ioc
{
    public $binding = [];

    public function bind($abstract, $concrete){
        $this->binding[$abstract]['concrete'] = function ($ioc) use ($concrete){
            return $ioc->build($concrete);
        };
    }
    public function make($abstract){
        // 根据key获取binding的值
        $concrete = $this->binding[$abstract]['concrete'];
        return $concrete($this);
    }
    // 创建对象
    public function build($concrete){

        $reflector = new \ReflectionClass($concrete);
        $constructor = $reflector->getConstructor();
        if(is_null($constructor)) {
            return $reflector->newInstance();
        }else {
            $dependencies = $constructor->getParameters();
            $instances = $this->getDependencies($dependencies);
            return $reflector->newInstanceArgs($instances);
        }
    }
    // 获取参数的依赖
    public function getDependencies($paramters){
        $dependencies = [];
        foreach ($paramters as $paramter) {
            $dependencies[] = $this->make($paramter->getClass()->name);
        }
        return $dependencies;
    }
}