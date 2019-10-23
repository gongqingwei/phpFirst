<?php
for ($i=0;$i<=50;$i++){
    if($i%2==0){
        echo $i,'<br>';
    }
}
for ($i=0;$i<4;$i++){
    $j.='<label style="color: rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.mt_rand(0,9).'</label>';
}
echo $j,'<br>';

function a1(){
    echo "这是一个函数调用";
}
a1();

$a=8;
function test(){
    GLOBAL $a;
    return $a;
}
$b=test();
echo $b;
echo '<br>';

function gap($x,$y) {
    //在这里如何实现以及返回两个数的差？
    return $x-$y;


}
echo"两个参数的差积是：".gap(150,10);
echo '<br>';
$a='imooc';
$imooc=function ($a){
    echo $a;
};
echo '<br>';

//定义变量
$score=90;
$get='';
//定义匿名函数$com
$com = function($score){
    if($score>=80){
        $get='优秀';
        echo '我的成绩是：',$score,'。我得到的评价是：',$get;
    }
};
echo $com($score);
echo '<br>';
$word="symmertry";
$letter="y";
echo strpos($word,$letter);
echo strrpos($word,$letter);
echo '<br>';
$str="abcdefghigklmnoqprstuvwxyz";
$str1=str_shuffle($str);
echo substr($str1,0,4);
echo '<br>';

$str='pig#cat$dog#duck#horse&monkey';
$str=str_replace('$','#',$str);
echo 'str:'.$str,'<br>';
$str=str_replace('&','#',$str);
echo 'str:'.$str,"<br>";
$arr=explode('#',$str);
print_r($arr);
echo  '<br>';

$num='0123456789';
$let='abcdefghijklmnopqrstuvwxyz';
$LET='ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$str=$num.$let.$LET;
$length=strlen($str);
echo $str,'长度是：',$length;
echo '<br>';
for($i=0;$i<4;$i++){
    $code.=substr($str,mt_rand(0,$length-1),1);
    echo $code,',';
}
echo '<br>';
echo $code,'<br>';
date_default_timezone_set("CPR");
print_r(date('Y年m月d日 h:i:s 星期 w'));

echo '<br>';
