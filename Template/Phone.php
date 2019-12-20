<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/12/20
 * Time: 10:32
 */

namespace Fengzyz\DesignPatterns\Template;

/**
 * Class Phone
 * @package Fengzyz\DesignPatterns\Template
 *
 */
abstract class Phone
{
    /**
     * 定义操作顺序
     */
    final public function action()
    {
        $this->powerOn();
        $this->showLogo();
        $this->callUp();
    }

    /**
     * 开机
     */
    protected function powerOn()
    {
        echo '开机' . '<br>';
    }

    /**
     * logo
     *
     * @return mixed
     */
    abstract protected function showLogo();

    /**
     * 打电话
     */
    protected function callUp()
    {
        echo '打电话' . '<br>';
    }
}