<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/8/30
 * Time: 11:11
 */

namespace Fengzyz\DesignPatterns\LRUCache;
require __DIR__.'/../vendor/autoload.php';

class Client
{
    public function run(){

        $cache = new LRUCache(1000);

        $cache->put('mykey', 'arrow to the knee');

        echo $cache->get('mykey');
    }
}

$client = new Client();

$client->run();