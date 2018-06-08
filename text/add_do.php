<meta charset=utf8>
<?php 
include('../Text.class.php');
$data=$_POST;
$obj=new Text();
$res=$obj->insert('liuyan',$data);
// var_dump($res);die;
if($res){
	// echo json_encode(1);
	echo "<script>alert('留言成功');location.href='list.php'</script>";
}else{
	// echo "<script>alert('留言失败');location.href=''</script>";
	echo 2;
}

?>