<?php


namespace Fengzyz\DesignPatterns\FactoryMethod;
require __DIR__.'/../vendor/autoload.php';

class Client
{
    public function run(){
        $factory = new TigerFactory();
        $operation= $factory->create();
        $operation->run();
    }
}

$client =  new Client();

$client->run();