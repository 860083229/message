<?php
include('../User.class.php');
$data=$_POST;
// var_dump($username);
$obj=new Single();
$res=$obj->register_do($data);
// var_dump($res);
if($res){
	echo "<script>alert('注册成功');location.href='login.php'</script>";
}else{
	echo "<script>alert('注册失败');location.href='register.php'</script>";
}