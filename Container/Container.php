<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/10/30
 * Time: 10:06
 */

namespace Fengzyz\DesignPatterns\Container;
use Closure;
use ReflectionClass;
use ReflectionParameter;

//容器类
class Container
{
    /**
     * 容器绑定，用于存放提供的实例或者实例的回调函数
     * @var array
     */
    protected $building = [];

    /**
     * 注册一个到绑定容器
     * @param $abstract
     * @param null $concrete
     * @param null $shard
     */
    public function bind($abstract,$concrete = null,$shard = null){
        if(is_null($concrete)){
            $concrete = $abstract;
        }
        if(!$concrete instanceof Closure){
            $concrete = $this->getClosure($abstract, $concrete);
        }
        $this->building[$abstract] = compact("concrete","shard");
    }

    /**
     * 默认生成实例的回调闭包
     * @param $abstract
     * @param $concrete
     */
    public function getClosure($abstract,  $concrete){
        return function ($c) use ($abstract, $concrete){
            $method = ($abstract == $concrete) ? 'build' : 'make';
            return $c->$method($concrete);
        };
    }

    /**
     * 生成实例
     * @param $abstract
     */
    public function make($abstract){

        $concrete = $this->getConcrete($abstract);

        if($this->isBuildable($concrete,$abstract)){
            $object = $this->build($concrete);
        }else{
            $object = $this->make($concrete);
        }
        return $object;
    }

    /**
     * 具体实例的名称或者对象
     * @param $concrete
     * @return mixed|object
     * @throws \ReflectionException
     */
    public function build($concrete){
        if($concrete instanceof Closure){
            return $concrete($this);
        }
        $reflector = new ReflectionClass($concrete);
        if(!$reflector->isInstantiable()){
            throw new \Exception("无法实例化");
        }
        $constructor = $reflector->getConstructor();
        if(is_null($constructor)){
            return new $concrete;
        }
        $dependencies =  $constructor->getParameters();
        $instance = $this->getDependencies($dependencies);
        return $reflector->newInstanceArgs($instance);
    }

    /**
     * 通过反射解决参数依赖问题
     * @param array $dependencies
     * @return array
     */
    public function getDependencies(array $dependencies){
        $results = [];
        foreach ($dependencies as $dependency){
            $results[] = is_null($dependency->getClass())
                ? $this->resolvedNonClass($dependency)
                : $this->resolvedClass($dependency);
        }
        return $results;
    }

    /**
     * 没有提示依赖错误
     * @param ReflectionParameter $parameter
     */
    public function resolvedNonClass(ReflectionParameter $parameter){
        if($parameter->isDefaultValueAvailable()){
            return $parameter->getDefaultValue();
        }
        throw new \Exception("出错");
    }

    /**
     * 通过容器解决依赖
     * @param ReflectionParameter $parameter
     */
    public function resolvedClass(ReflectionParameter $parameter){
        return $this->make($parameter->getClass()->name);
    }

    /**
     * 判断是否可以创建服务实体
     * @param $concrete
     * @param $abstract
     * @return bool
     */
    public function isBuildable($concrete , $abstract){
        return $concrete === $abstract || $concrete instanceof Closure;
    }

    /**
     * 获取绑定的回调函数
     * @param $abstract
     * @return mixed
     */
    public function getConcrete($abstract){
        if(!isset($this->building[$abstract])){
            return $abstract;
        }
        return $this->building[$abstract]['concrete'];
    }

    /**
     * 注册一个共享的绑定 单例
     * @param $abstract
     * @param null $concrete
     * @param null $shard
     */
    public function singleton($abstract,$concrete = null,$shard = null){
        $this->bind($abstract, $concrete, $shard);
    }

}