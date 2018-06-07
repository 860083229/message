<meta charset=utf8>
<?php 
$content=$_POST['content'];
$link=mysql_connect("127.0.0.1","root","root") or die("连接失败");
mysql_select_db("login");
mysql_set_charset("set names utf8");
$sql = "insert into `liuyan` (`content`) values ('$content')"; 
$res=mysql_query($sql);
if($res){
	// echo json_encode(1);
	echo "<script>alert('留言成功');location.href='list.php'</script>";
}else{
	// echo "<script>alert('留言失败');location.href=''</script>";
	echo 2;
}

?>