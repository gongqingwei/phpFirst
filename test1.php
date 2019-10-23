<?php
$var="
<form action='result1.php' method='post'>
    <table style='border: 1px solid red'>
        <tr align='right'>
            <td>用户名：</td>
            <td><input type='text' name='username'></td>
        </tr>
        <tr align='right'>
            <td>密码：</td>
            <td><input type='password' name='password'></td>
        </tr>
        <tr align='right'>
            <td>邮箱：</td>
            <td><input type='email' name='email'></td>
        </tr>
        <tr>
            <td><input type='submit'></td>
            <td><input type='button' value='重置'></td>
        </tr>
    </table>
</form>";
echo $var;

echo '<br>';
$i=5;
echo $i+++$i--;
echo '<br>';

date_default_timezone_set('PRC');
echo date("Y年m月d日 H:i:s 星期w");
echo '<br>';
