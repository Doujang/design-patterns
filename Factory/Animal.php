<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/4/13
 * Time: 21:27
 */
interface Animal{
    public function run();
}

class Bird implements Animal{
    public function run()
    {
        // TODO: Implement run() method.
        echo "天上飞";
    }
}

class Tiger implements Animal{
    public function run()
    {
        // TODO: Implement run() method.
        echo "=====陆地跑=====";
    }
}
class Fish implements Animal{
    public function run()
    {
        // TODO: Implement run() method.
        echo "=====水中游";
    }
}
//工厂类，专门用着类的创建
class AnimalFactory {
    public static function build($className = null){
        $className = ucfirst($className);
        if($className && class_exists($className)){
            return new $className;
        }
        return null;
    }
}
AnimalFactory::build('Fish')->run();
AnimalFactory::build('Tiger')->run();
AnimalFactory::build('Bird')->run();