<?php
namespace Controller\Admin;
use Controller\Controller;
use Model\Db;
class ArticleController extends Controller
{
	public function addArticle()
	{
		$data=$_POST;
		$obj=new Db();
		$res=$obj->insert('article',$data);
		if($res){
			echo "<script>alert('添加咨询成功');location.href='http://demo.message.com/index.php?c=ArticleController&a=listArticle'</script>";
		}else{
			echo "<script>alert('添加咨询失败');</script>";
		}
	}
	public function listArticle()
	{
		$obj=new Db();
		$res=$obj->selectAll('article');
		foreach ($res as $key => $value) {
			$data[$key]['id']=$value['id'];
			$data[$key]['articletitle']=$value['articletitle'];
			$data[$key]['articletitle2']=$value['articletitle2'];
			$data[$key]['articlecolumn']=$value['articlecolumn'];
			$data[$key]['articletype']=$value['articletype'];
			$data[$key]['articlesort']=$value['articlesort'];
			$data[$key]['keywords']=$value['keywords'];
			$data[$key]['abstract']=$value['abstract'];
			$data[$key]['author']=$value['author'];
			$data[$key]['sources']=$value['sources'];
			$data[$key]['allowcomments']=$value['allowcomments'];
			$data[$key]['commentdatemin']=$value['commentdatemin'];
			$data[$key]['commentdatemax']=$value['commentdatemax'];
		}
		$this->assign('data',$data);
		$this->display('article/article-list');
	}
	public function delArticle()
	{
		$id=$_GET['id'];
		$obj=new Db();
		$res=$obj->del('article',"$id");
		// var_dump($res);die;
		if($res){
			echo "<script>alert('删除成功');location.href='http://demo.message.com/index.php?c=ArticleController&a=listArticle'</script>";
		}else{
			echo "<script>alert('删除失败');</script>";
		}
	}
	public function updArticle()
	{
		$id=$_GET['id'];
		$obj=new Db();
		$res=$obj->selectAll('article',"id=$id");
		foreach ($res as $key => $value) {
			$data[$key]['id']=$value['id'];
			$data[$key]['articletitle']=$value['articletitle'];
			$data[$key]['articletitle2']=$value['articletitle2'];
			$data[$key]['articlecolumn']=$value['articlecolumn'];
			$data[$key]['articletype']=$value['articletype'];
			$data[$key]['articlesort']=$value['articlesort'];
			$data[$key]['keywords']=$value['keywords'];
			$data[$key]['abstract']=$value['abstract'];
			$data[$key]['author']=$value['author'];
			$data[$key]['sources']=$value['sources'];
			$data[$key]['allowcomments']=$value['allowcomments'];
			$data[$key]['commentdatemin']=$value['commentdatemin'];
			$data[$key]['commentdatemax']=$value['commentdatemax'];
		}
		$this->assign('data',$data);
		$this->display('article/article-upd');
	}
	public function updArticle_do()
	{
		$data=$_POST;
		$obj=new Db();
		$res=$obj->save('article',$data);
		if($res){
			echo "<script>alert('修改成功');location.href='http://demo.message.com/index.php?c=ArticleController&a=listArticle'</script>";
		}else{
			echo "<script>alert('修改失败');</script>";
		}
	}
}