<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/12/20
 * Time: 10:23
 */

namespace Fengzyz\DesignPatterns\Command;


interface CommandInterface
{
    /**
     * @return mixed
     */
    public function execute();
}