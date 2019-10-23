<?php
$var1="<form action='#' method='post'>
    <label>数值1：</label><input type='text' name='num1'/>
    <select>
        <option name='+' value='+'>+</option>
        <option name='-' value='-'>-</option>
        <option name='*' value='*'>*</option>
        <option name='/' value='/'>/</option>
    </select>
    <label>数值2：</label><input type='text' name='num2'/>
    <input type='submit'>
</form>";
echo $var1;
$var2=$_POST['+'];
$num1=$_POST['num1'];
$num2=$_POST['num2'];
echo "$num1+$num2=",$num1+$num2;
echo '<br>';

