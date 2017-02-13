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

class Car
{
    var $color;

    function Car($color = "green")
    {
        $this->color = $color;
    }

    function what_color()
    {
        echo "$this->color";
    }
}

$bmw120 = new Car("white");
echo "<br>bmw120: Properties\n";
$bmw120->what_color();

?>

</body>
</html>
