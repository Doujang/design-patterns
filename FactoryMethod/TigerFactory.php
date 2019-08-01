<?php


namespace Fengzyz\DesignPatterns\FactoryMethod;


class TigerFactory extends Factory
{
    public function create()
    {
        return new Tiger();

    }
}