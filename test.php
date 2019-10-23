<?php

$str=<<<table
<table>
<tr>
    <td><div style="background: red;width: 100px;height: 100px"></div></td>
    <td><div style="background: red;width: 100px;height: 100px"></div></td>
    <td><div style="background: red;width: 100px;height: 100px"></div></td>  
</tr>
<tr>
    <td><div style="background: red;width: 100px;height: 100px"></div></td>
    <td><div style="background: red;width: 100px;height: 100px"></div></td>
    <td><div style="background: red;width: 100px;height: 100px"></div></td>  
</tr>
<tr>
    <td><div style="background: red;width: 100px;height: 100px"></div></td>
    <td><div style="background: red;width: 100px;height: 100px"></div></td>
    <td><div style="background: red;width: 100px;height: 100px"></div></td>  
</tr>
</table>
table;
echo "$str <hr>";

$str="A33b6";
echo '@',(boolean)$str,'@<br>';

$str='3king';
//以下进行数据转换并打印输出
echo ':',settype($str,'int');
echo $str,'<br>';
define(‘TEST’,’hello’);
define('TESTT','helloo');
echo TESTT,'<br>';
//var_dump(get_defined_constants());

const NAME='gongqingwei';
echo NAME,'<br>';
var_dump(constant('NAME'));
echo '<br>';
var_dump(defined('NAME'));
const PASSWORD='123456';
define('PWD','123');
echo PASSWORD;
echo PWD;
echo '<br>';
echo defined('NAME');