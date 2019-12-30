<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/12/30
 * Time: 17:05
 */

namespace Fengzyz\DesignPatterns\Bridge;


abstract class Graph
{
    //颜色
    public $color;

    public function __construct(Color $color)
    {
        $this->color = $color;
    }

    abstract public function draw();
}