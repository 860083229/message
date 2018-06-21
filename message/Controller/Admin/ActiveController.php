<?php
namespace Controller\Admin;
use Controller\Controller;
use Model\Db;
class ActiveController extends Controller
{
	public function welcome()
	{
		$this->display('admin/index');
	}
	public function addContent()
	{	
		$data=$_POST;
		$obj=new Db();
		$res=$obj->insert('content',$data);
		if($res){
			echo "<script>alert('评论成功');location.href='http://demo.message.com/index.php?c=ActiveController&a=listContent'</script>";
		}else{
			echo "<script>alert('评论失败');</script>";
		}
	}
	public function listContent()
	{
		$obj=new Db();
		$res=$obj->selectAll('content');
		foreach ($res as $key => $value) {
			$data[$key]['id']=$value['id'];
			$data[$key]['title']=$value['title'];
			$data[$key]['content']=$value['content'];
		}
		$this->assign('data',$data);
		$this->display('admin/content-list');
	}
	public function delContent()
	{
		$id=$_GET['id'];
		$obj=new Db();
		$res=$obj->del('content',"$id");
		// var_dump($res);die;
		if($res){
			echo "<script>alert('删除成功');location.href='http://demo.message.com/index.php?c=ActiveController&a=listContent'</script>";
		}else{
			echo "<script>alert('删除失败');</script>";
		}
	}
	public function updContent()
	{
		$id=$_GET['id'];
		$obj=new Db();
		$res=$obj->selectAll('content',"id=$id");
		foreach ($res as $key => $value) {
			$data[$key]['id']=$value['id'];
			$data[$key]['title']=$value['title'];
			$data[$key]['content']=$value['content'];
		}
		$this->assign('data',$data);
		$this->display('admin/content-updList');
	}
	public function updContent_do()
	{
		$data=$_POST;
		$obj=new Db();
		$res=$obj->save('content',$data);
		if($res){
			echo "<script>alert('修改成功');location.href='http://demo.message.com/index.php?c=ActiveController&a=listContent'</script>";
		}else{
			echo "<script>alert('修改失败');</script>";
		}
	}
}