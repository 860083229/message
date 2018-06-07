<meta charset="UTF-8">
<?php
mysql_connect('127.0.0.1','root','root');
mysql_select_db("login");
mysql_set_charset("set names utf8");
$sql = "SELECT  * FROM `liuyan`";
$res = mysql_query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>展示</title>
</head>
<body>
	<center>
		<table border="1">
			<tr>
				<td>ID</td>
				<td>留言内容</td>
				<td>操作</td>
			</tr>
			<?php while ($arr=mysql_fetch_assoc($res)){?>
			<tr>
				<td><?php echo $arr['id']?></td>
				<td><?php echo $arr['content']?></td>
				<td>
					<a href="del.php?id=<?php echo $arr['id']?>">删除</a>|
					<a href="upd.php?id=<?php echo $arr['id']?>">修改</a>
				</td>
			</tr>
			<?php } ?>
		</table>
	</center>
</body>
</html>