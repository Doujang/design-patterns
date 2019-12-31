<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/12/31
 * Time: 11:14
 */

namespace Fengzyz\DesignPatterns\SafeComposite;


abstract class Component
{
    /**
     * @var
     */
    protected $name;

    /**
     * Component constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    abstract public function display();
}