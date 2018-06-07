<meta charset=utf8>;
<?php 
$username = $_POST['username'];
$pwd = $_POST['pwd'];
$link=mysql_connect("127.0.0.1","root","root") or die("连接失败");
mysql_select_db("login");
mysql_set_charset("set names utf8");
$sql = "insert into `user` (`username`,`pwd`) values ('$username','$pwd')";
$res=mysql_query($sql);
if($res){
	echo "<script>alert('注册成功');location.href='login.php'</script>";
}else{
	echo "<script>alert('注册失败');location.href='adduser.php'</script>";
}

?>