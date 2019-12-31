<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/12/31
 * Time: 11:14
 */

namespace Fengzyz\DesignPatterns\SafeComposite;


class Dir extends Component
{

    /**
     * @var array
     */
    protected $children = [];

    /**
     * 添加子节点
     *
     * @param Component $component
     */
    public function add(Component $component)
    {
        $this->children[] = $component;
    }

    /**
     * @return mixed|string
     */
    public function display()
    {
        $nameStr = $this->name .'<br>';
        foreach ($this->children as $k => $v) {

            $nameStr .= '--' . $v->display();
        }
        return $nameStr;
    }
}