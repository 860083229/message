<?php
class Text
{
	public function insert($table,$data)
	{
		include('Db.class.php');
		$str1='';
		$str2='';
		foreach ($data as $key => $value) {
			$str1.=$key.',';
			$str2.="'$value'".',';
		}
		$key_str=rtrim($str1,',');
		$value_str=rtrim($str2,',');
		$sql="insert into $table($key_str) values($value_str)";
		$obj=new Db();
		$res=$obj->pdo()->exec($sql);
		return $res;
	}	
	public function selectAll($table,$where=1)
	{
		include('Db.class.php');
		$sql="select * from $table where $where";
		$obj=new Db();
		$res=$obj->pdo()->query($sql);
		return $res;
	}
	public function del($table,$id)
	{
		include('Db.class.php');
		$sql="delete from $table where id='$id'";
		$obj=new Db();
		$res=$obj->pdo()->exec($sql);
		return $res;
	}
	public function save($table,$arr)
	{
		include('Db.class.php');
		$str_one='';
		foreach ($arr as $key => $value) {
			$str_one.=$key.'='."'$value'".',';
		}
		$str_one=rtrim($str_one,',');
		$sql="update $table set $str_one where id =".$arr['id'];
		$obj=new Db();
		$res=$obj->pdo()->exec($sql);
		// var_dump($res);die;
		return $res;
	}
}