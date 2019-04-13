## 单例模式

单例模式(Singleton Pattern)：单例模式确保某一个类只有一个实例，而且自行实例化并向整个系统提供这个实例，这个类称为单例类，它提供全局访问的方法。

单例模式的要点有三个：一是某个类只能有一个实例；二是它必须自行创建这个实例；三是它必须自行向整个系统提供这个实例。单例模式是一种对象创建型模式。单例模式又名单件模式或单态模式。

单例模式，正如其名，允许我们创建一个而且只能创建一个对象的类。

为什么要实现这么奇怪的类，只实例化一次？

在很多场景下会用到，如：配置类、Session类、Database类、Cache类、File类等等。

这些只需要实例化一次，就可以在应用全局中使用。

最基础的单例模式代码如下：
```php
class Singleton
{
    private static $instance = null;

    public static function getInstance()
    {
        if(self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __construct(){}
    private function __clone(){}
    private function __wakeup(){}
}
```