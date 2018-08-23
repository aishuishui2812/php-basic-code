<html>
<head>
    <meta charset="utf-8">
</head>
<h1>Integer 整型</h1>
<h3>语法</h3>
<p>
    整型值可以使用十进制，十六进制，八进制或二进制表示，前面可以加上可选的符号（- 或者 +）。
<br>
    二进制表达的 integer 自 PHP 5.4.0 起可用。
<br>
    要使用八进制表达，数字前必须加上 0（零）。要使用十六进制表达，数字前必须加上 0x。要使用二进制表达，数字前必须加上 0b。
</p>
<b>Example #1 整数文字表达</b>
<br>
&lt;?php<br>
$a = 1234; // 十进制数<br>
$a = -123; // 负数<br>
$a = 0123; // 八进制数 (等于十进制 83)<br>
$a = 0x1A; // 十六进制数 (等于十进制 26)<br>
$a = 0b11111111; // 二进制数字 (等于十进制 255)<br>
?&gt;
<p>
    整型数的字长和平台有关，尽管通常最大值是大约二十亿（32 位有符号）。64 位平台下的最大值通常是大约 9E18，除了 Windows 下 PHP 7 以前的版本，总是 32 位的。
    <br>PHP 不支持无符号的 integer。
    <br>Integer 值的字长可以用常量 <b>PHP_INT_SIZE</b> 来表示，<span style="color:red">自 PHP 4.4.0 和 PHP 5.0.5后，最大值可以用常量 PHP_INT_MAX 来表示，最小值可以在 PHP 7.0.0 及以后的版本中用常量 PHP_INT_MIN 表示</span>。
</p>
<div style="color: red; border: 1px red solid;">
<?php
//phpinfo();
echo '当前PHP版本：' . phpversion();
echo '<br>';
echo 'Integer字长为：' . PHP_INT_SIZE . ' (' . 8 * PHP_INT_SIZE . '位)';
if (defined('PHP_INT_MIN')) {
    echo '<br>';
    echo 'Integer最小整数：' . PHP_INT_MIN;
} else {
    echo '<br>';
    echo 'Integer最小整数：PHP_INT_MIN常量不存在';
}
if (defined('PHP_INT_MAX')) {
    echo '<br>';
    echo 'Integer最大整数：' . PHP_INT_MAX;
} else {
    echo '<br>';
    echo 'Integer最大整数：PHP_INT_MAX常量不存在';
}
?>
</div>
<h3>整数溢出</h3>
<p>
    如果给定的一个数超出了 integer 的范围，将会被解释为 float。同样如果执行的运算结果超出了 integer 范围，也会返回 float。
</p>
<p>
    <b>Example #2</b> 32 位系统下的整数溢出<br>
    &lt;?php<br>
    $large_number = 2147483647;<br>
    var_dump($large_number);                     // int(2147483647)<br>

    $large_number = 2147483648;<br>
    var_dump($large_number);                     // float(2147483648)<br>

    $million = 1000000;<br>
    $large_number =  50000 * $million;<br>
    var_dump($large_number);                     // float(50000000000)<br>
    ?&gt;<br>
</p>
<p>
    <b>Example #3</b> 64 位系统下的整数溢出<br>

    &lt;?php<br>
    $large_number = 9223372036854775807;<br>
    var_dump($large_number);                     // int(9223372036854775807)<br>

    $large_number = 9223372036854775808;<br>
    var_dump($large_number);                     // float(9.2233720368548E+18)<br>

    $million = 1000000;<br>
    $large_number =  50000000000000 * $million;<br>
    var_dump($large_number);                     // float(5.0E+19)<br>
    ?&gt;
</p>
<p>
    PHP 中没有整除的运算符。1/2 产生出 float 0.5。 值可以舍弃小数部分，强制转换为 integer，或者使用 round() 函数可以更好地进行四舍五入。<br>
    &lt;?php<br>
    var_dump(25/7);         // float(3.5714285714286)<br>
    var_dump((int) (25/7)); // int(3)<br>
    var_dump(round(25/7));  // float(4)<br>
    ?&gt;
</p>
<p>
<h3>转换为整型</h3>
    要明确地将一个值转换为 integer，用 (int) 或 (integer) 强制转换。不过大多数情况下都不需要强制转换，因为当运算符，函数或流程控制需要一个 integer 参数时，值会自动转换。还可以通过函数 intval() 来将一个值转换成整型。
<br>

    将 resource 转换成 integer 时， 结果会是 PHP 运行时为 resource 分配的唯一资源号。
<br>

    参见：类型转换的判别。
<br>

    从布尔值转换<br>
    FALSE 将产生出 0（零），TRUE 将产生出 1（壹）。<br>

    从浮点型转换<br>
    当从浮点数转换成整数时，将向下取整。<br>

    如果浮点数超出了整数范围（32 位平台下通常为 +/- 2.15e+9 = 2^31，64 位平台下，除了 Windows，通常为 +/- 9.22e+18 = 2^63），则结果为未定义，因为没有足够的精度给出一个确切的整数结果。在此情况下没有警告，甚至没有任何通知！
</p>
</html>