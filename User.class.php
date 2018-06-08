<meta charset="utf-8">
<?php
class Single
{
	public function login()
	{
		include('./user/login.php');

	}
	public function login_do($username,$pwd)
	{
		include('Db.class.php');
		$obj=new Db();
		// var_dump($obj);die;
		$sql="select * from user where username='$username' and pwd ='$pwd'";
		$res=$obj->pdo()->query($sql);
		// var_dump($res);die;
		foreach ($res as $key => $value) {
			$data[$key]['username']=$value['username'];
			$data[$key]['pwd']=$value['pwd'];
		}
		// var_dump($data);die;
		return $data;
	}
	public function register_do()
	{
		include('Db.class.php');
		$data=$_POST;
		$obj=new Db();
		$obj->pdo();
		$res=$obj->insert('user',$data);
		return $res;
	}
}
$obj=new Single();
$act=isset($_GET['act'])?$_GET['act']:'login';
$obj->$act();
