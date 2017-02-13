<!DOCTYPE html>
<html>
<body>

<?php

$x = 5; // 全局作用域

function myTest()
{
    global $x;
    static $y = 10; // 局部作用域
    echo "<p>测试函数内部的变量：</p>";
    echo "变量 x 是：$x";
    echo "<br>";
    echo "变量 y 是：$y";
    $x++;
    $y++;
}

myTest();
echo "<p>测试函数之外的变量：</p>";
echo "变量 x 是：$x <br>";

myTest();

echo "<p>测试函数之外的变量：</p>";
echo "变量 x 是：$x <br>";


echo "<h2>PHP online</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!!<br>";
echo "This", " string", " was", " made", " with multiple parameters. <br><br>";

$x = 5985;
var_dump($x);
echo "<br>";
$x = -345; // 负数
var_dump($x);
echo "<br>";
$x = true;
var_dump($x);
echo "<br>";
$x = array("Volvo", "BMW", "SAAB");
var_dump($x);

interface BMWCar
{
    function getColor();

    function getEngine();

    function getName();
}

class Car implements BMWCar
{
    var $color;
    var $engine;
    var $name;

    function Car($color = "green", $engine = "b13n16")
    {
        $this->color = $color;
        $this->engine = $engine;
    }

    function setName($name)
    {
        $this->name = $name;
    }


    function getColor()
    {
        return $this->color;
    }

    function getEngine()
    {
        return $this->engine;
    }

    function getName()
    {
        return $this->name;
    }
}

$bmw120 = new Car("white", "b13n16a");
$bmw120->setName("xiaomage");
$_name = $bmw120->getName();
$_carColor = $bmw120->getColor();
$_engine = $bmw120->getEngine();
echo "<br>bmw120 Properties<br>name:$_name<br>color:$_carColor<br>engine:$_engine";

?>

</body>
</html>
