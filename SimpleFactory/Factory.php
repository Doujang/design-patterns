<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/7/30
 * Time: 11:01
 */

namespace Fengzyz\DesignPatterns\SimpleFactory;

/**
 * 工厂类
 * Class Factory
 * @package Fengzyz\DesignPatterns\SimpleFactory
 */
class Factory
{

    public function create($operate){
        switch ($operate){
            case "老虎":
                $result = new Tiger();
                break;
            case "鸟":
                $result = new Bird();
                break;
            case "鱼":
                $result = new Fish();
                break;
            default:
                throw new \InvalidArgumentException('暂不支持其他动物');
        }
        return $result;
    }
}