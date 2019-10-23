<?php
$a=range('H','N');

$count=count($a);
//此处请使用for循环依次显示数组$a元素的大写
for($i=0;$i<$count;$i++){
    echo $a[$i];
}
echo '<br>';
//此处请使用foreach循环依次显示数组$a元素的小写
foreach($a as $val){
    echo $val;
}

