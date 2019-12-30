<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/12/30
 * Time: 17:07
 */

namespace Fengzyz\DesignPatterns\Bridge;


class Square extends Graph
{


    public function draw()
    {
        echo "画一个".$this->color->rum()."正方形";
    }
}