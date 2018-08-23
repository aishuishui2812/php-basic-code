<h1>Boolean布尔类型</h1>
<h3>语法</h3>
<hr>
指定一个布尔值，使用常量TRUE或FALSE，两个都不区分大小写。
<?php
/**
 * Created by PhpStorm.
 * User: Young
 * Date: 2018/8/23
 * Time: 10:11
 * Boolean 布尔类型
 */
$str=
'<br>&lt;?php<br>
$foo = TRUE;   //设置$foo 为 TRUE<br>
?&gt;<br>';
echo $str;

$action = "show_version";
$show_separators = 12;

//通常运算符所返回的boolean值结果会被传递给控制流程
if ($action == "show_version") {
    echo "The version is 1.23";
}

// 这样做是不必要的...
if ($show_separators == TRUE) {
    echo "<hr>\n";
}

// ...因为可以使用下面这种简单的方式：
if ($show_separators) {
    echo "<hr>\n";
}
?>
<h3>转换为布尔值</h3>
<p>
    要明确地将一个值转换成 boolean，用 (bool) 或者 (boolean) 来强制转换。但是很多情况下不需要用强制转换，因为当运算符，函数或者流程控制结构需要一个 boolean 参数时，该值会被自动转换。
</p>
<p>当转换为 boolean 时，以下值被认为是 FALSE：</p>
<ul>
    <li>布尔值 FALSE 本身</li>
    <li>整型值 0（零）</li>
    <li>浮点型值 0.0（零）</li>
    <li>空字符串，以及字符串 "0"</li>
    <li>不包括任何元素的数组</li>
    <li>特殊类型 NULL（包括尚未赋值的变量）</li>
    <li>从空标记生成的 SimpleXML 对象</li>
</ul>
<p><b>Warning</b> -1 和其它非零值（不论正负）一样，被认为是 TRUE！</p>
<p>所有其它值都被认为是 TRUE（包括任何资源 和 NAN）。</p>
<?php
echo 'var_dump((bool) "") ：';
var_dump((bool) "");        // bool(false)
echo '<br>var_dump((bool) 1) ：';
var_dump((bool) 1);         // bool(true)
echo '<br>var_dump((bool) -2)) ：';
var_dump((bool) -2);        // bool(true)
echo '<br>var_dump((bool) "foo") ：';
var_dump((bool) "foo");     // bool(true)
echo '<br>var_dump((bool) 2.3e5) ：';
var_dump((bool) 2.3e5);     // bool(true)
echo '<br>var_dump(array(12)) ：';
var_dump((bool) array(12)); // bool(true)
echo '<br>var_dump((bool) array()) ：';
var_dump((bool) array());   // bool(false)
echo '<br>var_dump((bool) "false") ：';
var_dump((bool) "false");   // bool(true)
echo '<br>var_dump((bool) "0") ：';
var_dump((bool) "0");   // bool(false)
echo '<br>var_dump((bool) " ") ：';
var_dump((bool) " ");   // bool(true)
echo '<br>var_dump((bool) 0.0) ：';
var_dump((bool) 0.0);   // bool(false)
echo '<br>var_dump((bool) "0.0") ：';
var_dump((bool) "0.0");   // bool(false)
echo '<br>var_dump(0 == "all") ：';
var_dump(0 == "all");   // 特别注意：结果 bool(true)
echo '<br>var_dump(0 == (bool)"all") ：';
var_dump(0 == (bool)"all");   // 特别注意：结果 bool(false)
echo '<br>var_dump((string)0 == "all") ：';
var_dump((string)0 == 'all');  // bool(false)
?>