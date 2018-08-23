<h6>声明如下：</h6>
<?php
/**
 * Created by PhpStorm.
 * User: Young
 * Date: 2018/8/23
 * Time: 9:29
 * 简单的检测数据类型的例子
 */
$a_bool = TRUE;    //布尔值 boolean
$a_str = "foo";    //字符串 string
$a_str2 = 'bar';   //字符串 string
$an_int = 12;      //整型  int
?>
<ul>
    <li>$a_bool = TRUE;</li>
    <li>$a_str = "foo";</li>
    <li>$a_str2 = 'bar';</li>
    <li>$an_int = 12;</li>
</ul>
<h6>结果：</h6>
<?php

echo 'gettype($a_bool) 输出：' . gettype($a_bool) . '<br>';   //输出： boolean
echo 'gettype($a_str) 输出：' . gettype($a_str) . '<br>';    //输出： string
echo 'gettype($an_int) 输出：' . gettype($an_int) . '<br>';   //输出： integer

if (is_int($an_int)) {
    echo 'is_int($an_int)：<b style="color:green">$an_int是整型类型</b>' . '<br>';
} else {
    echo 'is_int($an_int)：<b style="color:red">$an_int不是整型类型</b>' . '<br>';
}

if (is_string($a_str2)) {
    echo 'is_string($a_str2)：<b style="color:green">$a_str2是字符串类型</b>' . '<br>';
} else {
    echo 'is_string($a_str2)：<b style="color:red">$a_str2不是字符串类型</b>' . '<br>';
}

if (is_bool($a_str)) {
    echo 'is_bool($a_str)：<b style="color:green">$a_str是布尔类型</b>' . '<br>';
} else {
    echo 'is_bool($a_str)：<b style="color:red">$a_str不是布尔类型</b>' . '<br>';
}

if (is_bool($an_int)) {
    echo 'is_bool($an_int)：<b style="color:green">$an_int是布尔类型</b>' . '<br>';
} else {
    echo 'is_bool($an_int)：<b style="color:red">$an_int不是布尔类型</b>' . '<br>';
}

if ($an_int == true) {
    echo '$an_int == true：<b style="color:green">为真</b>' . '<br>';
} else {
    echo '$an_int == true：<b style="color:red">为假</b>' . '<br>';
}