<?php

class DemoClass
{
    public static string $staticProperty = "静态属性";

    private string $privateProperty = "私有属性, 外部不可访问";

    public string $publicProperty;

    public function __construct($publicProperty)
    {
        $this->publicProperty = $publicProperty;
        echo "构造方法被调用 <hr>";
    }

    public function __destruct()
    {
        echo "析构方法被调用 <hr>";
    }

    private function privateMethod(): void
    {
        echo "调用了一个不可访问的方法 <hr>";
    }

    public function __call($name, $arguments)
    {
        echo "调用了一个不可访问的方法 $name <hr>";
    }

    private static function privateStaticMethod(): void
    {
        echo "调用了一个不可访问的静态方法 <hr>";
    }

    public static function __callStatic($name, $arguments)
    {
        echo "调用了一个不可访问的静态方法 $name <hr>";
    }

    public function __get($name)
    {
        echo "获取了一个不可访问的属性 $name <hr>";
    }

    public function __set($name, $value)
    {
        echo "设置了一个不可访问的属性 $name <hr>";
    }

    public function __isset($name)
    {
        echo "对不可访问的属性调用了 isset() 或 empty() $name <hr>";
    }

    public function __unset($name)
    {
        echo "对不可访问的属性调用了 unset() $name <hr>";
    }

    public function __sleep()
    {
        echo "对象被序列化之前调用 <hr>";
    }

    public function __wakeup()
    {
        echo "对象被反序列化之后调用 <hr>";
    }

    public function __toString()
    {
        return "类被当成字符串时的回应方法 <hr>";
    }

    public function __invoke(): void
    {
        echo "调用一个对象时的回应方法 <hr>";
    }

    public function __clone()
    {
        echo "对象复制完成时调用 <hr>";
    }

    public function __autoload(): void
    {
        echo "尝试加载未定义的类 <hr>";
    }

    public function __debugInfo()
    {
        echo "打印所需调试信息 <hr>";
    }
}

echo DemoClass::$staticProperty . "<hr>";
DemoClass::privateStaticMethod();

$demo = new DemoClass('公开属性');
$demo->privateMethod();
echo $demo->privateProperty;
var_dump(isset($demo->privateProperty));
echo "<hr>";

class Person
{
    public function __get(string $name)
    {
        echo "当前类名: " . __CLASS__ . "<hr>";
        return "李四";
    }
}

$person = new Person();
var_dump($person->name);
echo "<hr>";

echo __LINE__ . "<hr>";
echo __FILE__ . "<hr>";
echo __DIR__ . "<hr>";

function showFunctionName(): void
{
    echo __FUNCTION__ . "<hr>";
}

showFunctionName();

echo __NAMESPACE__ . "<hr>";
