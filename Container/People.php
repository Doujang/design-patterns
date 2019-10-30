<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/10/30
 * Time: 10:04
 */

namespace Fengzyz\DesignPatterns\Container;


class People
{
    private $car;

    public function __construct(Car $car)
    {
        $this->car = $car;
    }
    public  function  run($type){
        $this->car->driveCar($type);
    }
}