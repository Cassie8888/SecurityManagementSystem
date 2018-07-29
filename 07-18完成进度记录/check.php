<?php
//获取表单数据
$name=$_POST['username'];
$password=$_POST['userpwd'];
//检验用户名是否合法
if (!preg_match("/^[a-zA-Z0-9_\x80-\xff][a-zA-Z0-9_\x80-\xff]{1,}$/", $name)) //两位以上的字母，数字或下划线
{ 
echo  "不符合条件";
} 
//检验口令是否合法
$minLen=6;
$maxLen=36;
$match='/^[\\~!@#$%^&*()-_=+|{}\[\],.?\/:;\'\"\d\w]{'.$minLen.','.$maxLen.'}$/'; 
$v = trim($password);
if(!preg_match($match,$v)) 
{
echo "不符合条件" ;
}
?>