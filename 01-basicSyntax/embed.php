<?php
/**
 * Created by PhpStorm.
 * User: Young
 * Date: 2018/8/22
 * Time: 17:20
 * php代码内嵌到Html中
 */
?>
标签外代码，php不会解析
<hr/>
<?php if ($expression == true): ?>
        expression 为 真
<?php else: ?>
        expression 为 假
<?php endif; ?>
<hr/>
只会解析<?php ?>内的代码

<hr/>