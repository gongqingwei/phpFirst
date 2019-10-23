<?php
//定义教师用户信息二维数组
$table=array(
    array(123,"Demon",28,"male",'PHP'),
    array(125,"Stefen",23,"male",'Android'),
    array(256,"Elena",32,"female",'JAVA'),
    array(213,"Nike",25,"male",'HTML'),
    array(358,"Peter",27,"male",'JS'),
    array(186,"Bobby",35,"female",'CSS')
);

//输出表格第一行
echo '<table align="center" width=500 border=1 >';//表格开始标签
echo '<caption><h1>'.'Userslist'.'</h1></caption>';//表格标题
echo '<tr bgcolor="yellow">';//行开始标签
echo '<td>编号</td>';//列标签
echo '<td>姓名</td>';
echo '<td>年龄</td>';
echo '<td>性别</td>';
echo '<td>课程</td>';
echo '</tr>'; //行结束标签
//请在此处遍历二维数组，输出教师信息填充在表格中
foreach($table as $user){
    echo '<tr>';
    echo '<td>';
    echo $user[0];
    echo '</td>';
    echo '<td>';
    echo $user[1];
    echo '</td>';
    echo '<td>';
    echo $user[2];
    echo '</td>';
    echo '<td>';
    echo $user[3];
    echo '</td>';
    echo '<td>';
    echo $user[4];
    echo '</td>';
    echo '</tr>';
}

echo '</table>';//输出表格结束标签
$user=array('male',28);
list($sex,$age)=$user;
echo $sex.'<br>';
echo $age.'<br>';
$arr=['a','b','c'];
list($a,$b,$c)=$arr;
echo $a,$b,$c;
echo '<br>';
var_dump(range(0,9));
?>

