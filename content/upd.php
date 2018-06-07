<meta charset="UTF-8">
<?php
include('Db.class.php');
$id=$_GET['id'];
// var_dump($id);
$res=$obj->selectAll('liuyan',"id=$id");
while ($arr=mysql_fetch_assoc($res)) {
	$data[]=$arr;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php foreach ($data as $key => $value): ?>
		<form action="upd_do.php" method="post">
		<input type="hidden" value="<?php echo $value['id']?>" name="id">
		<table>
			<tr>
				<td>留言：</td>
				<td><textarea name="content" id="content" value=""><?php echo $value['content']?></textarea></td>
			</tr>
			<tr>
				<td><input type="submit" value="修改" ></td>
			</tr>

		</table>
		<div id="dia"></div>

	</form>
	<?php endforeach ?>

</body>  
</html>