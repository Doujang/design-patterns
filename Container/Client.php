<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/10/30
 * Time: 11:11
 */

namespace Fengzyz\DesignPatterns\Container;
require __DIR__.'/../vendor/autoload.php';

class Client
{
    public function run(){
        $app = new Container();
        $app->bind('Car','Fengzyz\DesignPatterns\Container\Car');
        $app->bind('People','Fengzyz\DesignPatterns\Container\People');
        $people = $app->make('People');
        echo $people->run('sss').PHP_EOL;
    }
}

$client = new Client();
$client->run();