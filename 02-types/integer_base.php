<?php
/**
 * User: Young
 * Date: 2018/8/24
 * Time: 9:16
 * 整型数据的基础练习
 * 1、二进制、八进制、十进制、十六进制的赋值操作
 * 2、php版本、integer字长、最大最小值检测
 * 3、整数溢出
 */

$a_int = 100;               //十进制  100
$b_int = 0x12;              //十六进制 18  以0x(X)开头
$c_int = 0123;              //八进制   83  以0开头
$d_int = 0b11001100;        //二进制   204 以0b开头

echo $a_int . '<br>';
echo $b_int . '<br>';
echo $c_int . '<br>';
echo $d_int . '<br>';
echo '<hr>';

echo '当前的PHP版本：' . phpversion() . '<br>';
echo 'integer值的字长为：' . PHP_INT_SIZE . '<br>';
if (defined('PHP_INT_MIN')) {
    echo 'integer类型最小值为：' . PHP_INT_MIN . '<br>';
} else {
    echo '当前PHP版本不支持PHP_INT_MIN常量，请使用PHP 7及以上版本<br>';
}
if (defined('PHP_INT_MAX')) {
    echo 'integer类型最大值为：' . PHP_INT_MAX . '<br>';
} else {
    echo '当前PHP版本不支持PHP_INT_MAX常量，请使用PHP 5.0.5及以上版本<br>';
}

echo '<hr>';
echo "<h4>4个字长下的整型溢出：</h4>";
$int_max = PHP_INT_MAX;
var_dump($int_max);     //int(2147483647)
$larger = $int_max + 1;
var_dump($larger);      //float(2147483648)
$million = 1000000;
$large_number = $million * 5000;
var_dump($large_number);//float(5000000000)
$int_min = PHP_INT_MIN;

echo '<hr>';
echo 'PHP 中没有整除的运算符。1/2 产生出 float 0.5。 值可以舍弃小数部分，强制转换为 integer，或者使用 round() 函数可以更好地进行四舍五入。';
echo '<br>&lt;?php<br>
var_dump(25/7);         // float(3.5714285714286)<br>
var_dump((int) (25/7)); // int(3)<br>
var_dump(round(25/7));  // float(4)<br>
?>';

/*echo "<h4>8个字长下的整型溢出：</h4>";
$large_number = 9223372036854775807;
var_dump($large_number);                     // int(9223372036854775807)

$large_number = 9223372036854775808;
var_dump($large_number);                     // float(9.2233720368548E+18)

$million = 1000000;
$large_number =  50000000000000 * $million;
var_dump($large_number);                     // float(5.0E+19)*/
