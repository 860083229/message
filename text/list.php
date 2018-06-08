<meta charset="UTF-8">
<?php
include('../Text.class.php');
$obj=new Text();
$res=$obj->selectAll('liuyan');
// var_dump($res);
foreach ($res as $key => $value) {
	$data[$key]['id']=$value['id'];
	$data[$key]['content']=$value['content'];
}
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
			<?php foreach ($data as $key => $value): ?>
				<tr>
					<td><?php echo $value['id']?></td>
					<td><?php echo $value['content']?></td>
					<td>
						<a href="del.php?id=<?php echo $value['id']?>">删除</a>|
						<a href="upd.php?id=<?php echo $value['id']?>">修改</a>
					</td>
				</tr>
			<?php endforeach ?>
			

		</table>
	</center>
</body>
</html>