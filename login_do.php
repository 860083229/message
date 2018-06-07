<meta charset=utf8>
<?php 
$username = $_POST['username'];
$pwd = $_POST['pwd'];
$link=mysql_connect("127.0.0.1","root","root") or die("连接失败");
mysql_select_db("login");
mysql_set_charset("set names utf8");
$sql = "select * from `user` where username='$username'"; 
$res=mysql_query($sql);
// var_dump($res);die;
$arr = mysql_fetch_assoc($res);
if($arr){
	if($pwd==$arr['pwd']){
		echo "<script>alert('登录成功');location.href='liuyan.php'</script>";
	}else{
		echo "<script>alert('密码错误');location.href='login.php'</script>";
	}
	
}else{
	echo "<script>alert('用户名不存在');location.href='login.php'</script>";
}

?>