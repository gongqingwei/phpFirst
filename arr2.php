<?php
$arr2=array(
    'Monday'=>array(
        'food'=>'irce',
        'furits'=>array(
            'apple','grape','peach'
        ),
        'vegetables'=>array(
            'potato','carrot','onion'
        )
    ),
    'Tuesday'=>'food','fruits'=>array(
        'orange'
    ),'vegetables'
);
print_r($arr2);
echo '<br>';

$a=range('H','N');

$count=count($a);
//此处请使用for循环依次显示数组$a元素的大写
for($i=0;i<$count;$i++){
    $a[i];
}

//此处请使用foreach循环依次显示数组$a元素的小写
foreach($a as $val){
    echo $val;
}