<?php
namespace Model; 
final class Db
{
	public $pdo;
	public  function __construct()
	{
		$db=C('db');
		$this->pdo=new \PDO('mysql:host='.$db['host'].';dbname='.$db['dbname'],$db['username'],$db['password']);
	}
	public function insert($table,$data)
	{
		$str1='';
		$str2='';
		foreach ($data as $key => $value) {
			$str1.=$key.',';
			$str2.="'$value'".',';
		}
		$key_str=rtrim($str1,',');
		$value_str=rtrim($str2,',');
		$sql="insert into $table($key_str) values($value_str)";
		$res=$this->pdo->exec($sql);
		return $res;
	}
	public function selectAll($table,$where=1)
	{
		$sql="select * from $table where $where";
		$res=$this->pdo->query($sql);
		return $res;
	}
	public function del($table,$id)
	{
		$sql="delete from $table where id='$id'";
		$res=$this->pdo->exec($sql);
		return $res;
	}
	public function save($table,$arr)
	{
		$str_one='';
		foreach ($arr as $key => $value) {
			$str_one.=$key.'='."'$value'".',';
		}
		$str_one=rtrim($str_one,',');
		$sql="update $table set $str_one where id =".$arr['id'];
		$res=$this->pdo->exec($sql);
		return $res;
	}
}
