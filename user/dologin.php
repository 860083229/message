<?php
include('../User.class.php');
$username=$_POST['username'];
$pwd=$_POST['pwd'];
// var_dump($username);
$obj=new Single();
$res=$obj->login_do($username,$pwd);
// var_dump($res);
if($res){
	echo "<script>alert('登录成功');location.href='list.php'</script>";
}else{
	echo "<script>alert('登录失败');location.href='list.php'</script>";
}