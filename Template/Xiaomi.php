<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/12/20
 * Time: 10:35
 */

namespace Fengzyz\DesignPatterns\Template;


class Xiaomi extends Phone
{
    /**
     * logo
     *
     * @return mixed|void
     */
    protected function showLogo()
    {
        echo '小米logo'. '<br>';
    }


}