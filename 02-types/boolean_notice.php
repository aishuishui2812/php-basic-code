<?php
//下面是几个关于boolean类型的几个特别要注意的例子
/**
 * 第一个例子
 * OR的优先级没有=高，||的优先级比=高，尽量使用||
 */
$x = TRUE;
$y = FALSE;
$z = $y OR $x;
var_dump($z);        //false

$x = TRUE;
$y = FALSE;
$z = $y || $x;
var_dump($z);        //true
echo '<hr>';

/**
 * 第二个例子
 * 隐形比较
 */
// Consider that the 0 could by any parameters including itself
var_dump(0 == 1);               // false  同类型相比，明显是false
var_dump(0 == (bool)'all');     // false  all强转bool类型为true，0和true不相等，所以是false
var_dump(0 == 'all');           // TRUE  字符串all和0做比较，all会先转化为整型，即0， 所以相等
var_dump(0 === 'all');          // false  由于是完全相等判断，只从类型方面判断就是false，一个整型一个字符串类型

// To avoid this behavior, you need to cast your parameter as string like that :
var_dump((string)0 == 'all'); // false  整型0强转字符串，字符串0和字符串all同种类型相比，肯定为false
echo '<hr>';

/**
 * 第三个例子
 * 在数组中false下标就相当于0，true下标就相当于1，一定要注意
 * false和0的隐形转换 true和1的隐形转换
 */
function remove_element($element, $array) {
    $index = array_search($element, $array);
    unset($array[$index]);
    return $array;
}

$array1 = ['A', 'B', 'C'];
var_dump(remove_element('X', $array1));  //array(2) { [1]=> string(1) "B" [2]=> string(1) "C" }

$array2 = ['C', 'D', 'E'];
unset($array2[true]);
var_dump($array2);  //array(2) { [0]=> string(1) "C" [2]=> string(1) "E" }

//下面是修正后的删除元素函数
function remove_element2($element, $array)
{
    $index = array_search($element, $array);
    if ($index !== FALSE)
    {
        unset ($array[$index]);
    }
    return $array;
}

