<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/8/23
 * Time: 9:04
 */

namespace Fengzyz\DesignPatterns\Decorator;


abstract class Decorator implements Food
{
    /**
     * @var Food
     */
    protected $food;

    /**
     * Decorator constructor.
     * @param Food $food
     */
    public function __construct(Food $food)
    {
        $this->food = $food;
    }
}