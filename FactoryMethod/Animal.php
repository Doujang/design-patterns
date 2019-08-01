<?php


namespace Fengzyz\DesignPatterns\FactoryMethod;


abstract class Animal
{
    protected $name = "";

    abstract public function run();

    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
       return $this->name;
    }
}