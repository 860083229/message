<meta charset="utf-8">
<?php 
final class Db
{
	public  function pdo()
	{
		$pdo = new PDO("mysql:host=127.0.0.1;dbname=login",'root','root');
		return $pdo;
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
		$pdo=$this->pdo();
		$res=$pdo->exec($sql);
		return $res;
	}
	public function selectAll($table,$where=1)
	{
		$pdo=$this->pdo();
		$sql="select * from $table where $where";
		$res=$pdo->query($sql);
		return $res;
	}
	public function del($table,$id)
	{
		$sql="delete from $table where id='$id'";
		$pdo=$this->pdo();
		$res=$pdo->exec($sql);
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
		$pdo=$this->pdo();
		$res=$pdo->exec($sql);
		return $res;
	}
}
