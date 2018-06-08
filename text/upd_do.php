<meta charset="UTF-8">
<?php
include('../Text.class.php');
$obj=new Text();
$data=$_POST;
$res=$obj->save('liuyan',$data);
if($res){
	echo "<script>alert('修改成功');location.href='list.php'</script>";
}else{
	echo "<script>alert('修改失败');location.href='list.php'</script>";
}
?>