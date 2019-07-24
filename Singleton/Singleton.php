<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/4/13
 * Time: 11:49
 */

$config = array(
    'db_name' => 'test',
    'db_host' => 'localhost',
    'db_user' => 'root',
    'db_pass' => 'root'
);

class Database
{
    // 声明$instance为私有静态类型，用于保存当前类实例化后的对象
    private static $instance = null;
    // 数据库连接句柄
    private $db = null;

    // 构造方法声明为私有方法，禁止外部程序使用new实例化，只能在内部new
    private function __construct($config = array())
    {
        $dsn = sprintf('mysql:host=%s;dbname=%s', $config['db_host'], $config['db_name']);
        $this->db = new PDO($dsn, $config['db_user'], $config['db_pass']);
    }

    // 这是获取当前类对象的唯一方式
    public static function getInstance($config = array())
    {
        // 检查对象是否已经存在，不存在则实例化后保存到$instance属性
        if(self::$instance == null) {
            self::$instance = new self($config);
        }
        return self::$instance;
    }

    // 获取数据库句柄方法
    public function db()
    {
        return $this->db;
    }

    // 声明成私有方法，禁止克隆对象
    private function __clone(){}
    // 声明成私有方法，禁止重建对象
    private function __wakeup(){}
}

$db1 = Database::getInstance($config);
var_dump($db1);