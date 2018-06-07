<meta charset=utf8>
<?php 
include('Db.class.php');
$username = $_POST['username'];
$pwd = $_POST['pwd'];
$res=$obj->login('user',$username,$pwd);
while($arr=mysql_fetch_assoc($res)) {
	$data[]=$arr;
}
if($data){
	session('user',$data);
	echo "<script>alert('登录成功');location.href='liuyan.php'</script>";
	}else{
	echo "<script>alert('登录失败');location.href='login.php'</script>";
}

?>