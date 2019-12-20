<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/12/20
 * Time: 10:36
 */

namespace Fengzyz\DesignPatterns\Template;


class Google extends Phone
{
    /**
     * 打电话
     *
     * @return mixed|void
     */
    protected function showLogo()
    {
        echo 'Google logo'. '<br>';
    }
}