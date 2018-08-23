<?php
/**
 * Created by PhpStorm.
 * User: Young
 * Date: 2018/8/23
 * Time: 9:00
 * 数据类型简介
 */
?>
<h2>简介</h2>
<p>php支持9种原始数据类型。</p>

四种标量类型：
<ul>
    <li>boolean（布尔型）</li>
    <li>integer（整型）</li>
    <li>float（浮点型）</li>
    <li>string（字符串）</li>
</ul>

三种复合类型：
<ul>
    <li>array（数组）</li>
    <li>object（对象）</li>
    <li>callable（可调用）</li>
</ul>

两种特殊类型：
<ul>
    <li>resource（资源）</li>
    <li>NULL（无类型）</li>
</ul>

为了确保代码的易读性，本手册还介绍了一些伪类型：
<ul>
    <li>mixed（混合类型）</li>
    <li>number（数字类型）</li>
    <li>callback（回调类型）</li>
    <li>array|object（数组 | 对象类）</li>
    <li>void（无类型）</li>
</ul>
以及伪变量 $...。
<p>
    变量的类型通常不是由程序员设定的，确切地说，是由 PHP 根据该变量使用的上下文在运行时决定的。
</p>