<meta charset="UTF-8">
<?php
mysql_connect('127.0.0.1','root','root');
mysql_select_db("login");
mysql_set_charset("set names utf8");
$id = $_GET['id'];
$sql = "delete from `liuyan` where id=$id";
$res = mysql_query($sql);
if($res){
	echo "<script>alert('删除成功');location.href='list.php'</script>";
}else{
	echo "<script>alert('删除失败');location.href='list.php'</script>";
}
?>