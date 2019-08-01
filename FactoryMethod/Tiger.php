<?php


namespace Fengzyz\DesignPatterns\FactoryMethod;


class Tiger extends Animal
{
    public function run()
    {
        $this->setName("老虎");
        echo "这是一只凶猛的".$this->getName();

    }
}