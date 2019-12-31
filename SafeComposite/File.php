<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/12/31
 * Time: 11:29
 */

namespace Fengzyz\DesignPatterns\SafeComposite;

/**
 * 文件类
 * Class File
 * @package Fengzyz\DesignPatterns\SafeComposite
 */
class File extends Component
{
    /**
     * @return mixed|string
     */
    public function display()
    {
        return '--' . $this->name .'<br>';
    }
}