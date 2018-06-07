<meta charset="UTF-8">
<?php
include('Db.class.php');
$id = $_GET['id'];
$res=$obj->del('liuyan',$id);

if($res){
	echo "<script>alert('删除成功');location.href='list.php'</script>";
}else{
	echo "<script>alert('删除失败');location.href='list.php'</script>";
}
?>