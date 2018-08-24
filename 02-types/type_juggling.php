<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<h1>类型转换的判别</h1>
<hr>
<p>
    1、PHP在变量定义中不需要（或不支持）明确的类型定义；变量类型是根据使用该变量的上下文所决定的。<br>
    也就是说，如果把一个string值赋给变量$var, $var就变成了一个string。如果又把一个integer赋给了<br>
    $var，那它就成了一个integer。
</p>
<div style="border: 1px red dotted">
&lt;?php<br>
$a_var = 'string';<br>
var_dump($a_var);  //string(6) "string"<br>
$a_var = 13;<br>
var_dump($a_var);  //int(13)<br>
?>
</div>
<p>
    2、PHP的自动类型转换的一个例子是乘法运算符"*"。
    如果任何一个操作数是float，则所有的操作数都被当成float，结果也是float。<br>
    否则操作数会被解释为integer，结果也是integer。<br>
    注意这并没有改变这些操作数本身的类型；改变的仅是这些操作数如何被求值以及表达式本身的类型。<br>
    <span style="display: block;background: #CCCCCC">
    <b style="color: red;">特别注意：字符串在进行四则运算（+-*/%）时，自身会先转换为INT类型，但是会报notice错误。</b><br>
    var_dump(1 + '4jkj');类似下面的错误提示：<br>
    Notice: A non well formed numeric value encountered in D:\Web\php-basic-code\02-types\type_juggling.php on line 54<br>
    <b style="color: red;">但是，在进行比较运算（>,<,==,!=,===）的时候，字符串类型在进行隐式转换的同时，不会报notice错误。</b><br>
    var_dump(1 == '4jkj');  //false<br>
    </span>
</p>
<div style="border: 1px red dotted">
    <h3>四则运算</h3>
    &lt;?php<br>
    $a_var = 1.5;<br>
    $b_var = 6;<br>
    $c_var = '12abcd';<br>
    $d_var = true;<br>
    var_dump($a_var * $b_var);  //float(9)<br>
    var_dump($a_var * $c_var);  //float(18) 这里会报Notice错误，因为$c_var是一个字符串，实际过程中应该 $a_var * (int)$c_var<br>
    var_dump($a_var * $d_var);  //float(1.5) true隐式转化为数值为1<br>
    var_dump($b_var * $c_var);  //int(72) 这里会报Notice错误，因为$c_var是一个字符串，实际过程中应该 $b_var * (int)$c_var<br>
    var_dump($b_var * $d_var);  //int(6) true隐式转化为数值为1<br>
    var_dump($c_var * $d_var);  //int(12) 这里会报Notice错误，因为$c_var是一个字符串<br>
    <h3>比较运算</h3>
    var_dump($a_var > $b_var);   // false<br>
    var_dump($a_var < $c_var);   // true<br>
    var_dump($a_var == $d_var);  // true 注意了<br>
    var_dump($b_var === $c_var); // false<br>
    var_dump($b_var != $d_var);  // false 注意了<br>
    var_dump($c_var !== $d_var); // true<br>
    //<b style="color:red">和true做==比较时，所有非0、0.0、''、'0'等其他的都为true，因为布尔型和其它任意类型相比，其它类型会先转化为布尔型，然后再做比较</b><br>
    ?>
</div>
<?php
/**
 * User: Young
 * Date: 2018/8/24
 * Time: 10:18
 * 类型转换的判别
 */

/*echo "<br><h3>四则运算</h3><br>";
$a_var = 1.5;
$b_var = 6;
$c_var = "12abcd";
$d_var = true;
var_dump($a_var > $b_var);   // false<br>
var_dump($a_var < $c_var);   //float(18) 这里会报Notice错误，因为$c_var是一个字符串，实际过程中应该 $a_var * (int)$c_var<br>
var_dump($a_var == $d_var);  //float(1.5) true隐式转化为数值为1<br>
var_dump($b_var === $c_var); //int(72) 这里会报Notice错误，因为$c_var是一个字符串，实际过程中应该 $b_var * (int)$c_var<br>
var_dump($b_var != $d_var);  //int(6) true隐式转化为数值为1<br>
var_dump($c_var !== $d_var); //int(12) 这里会报Notice错误，因为$c_var是一个字符串<br>*/
?>
</body>
</html>
