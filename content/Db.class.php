<meta charset="utf-8">
<?php 
final class Single{
	public $rand;
	private static $inst;
	private function __construct(){
		mysql_connect('127.0.0.1','root','root');
		mysql_select_db('login');
		mysql_set_charset('set names utf8');

	}

	public static function getIns(){
		if(self::$inst instanceof self){
			return self::$inst;
		}else{
			self::$inst = new self;
			return self::$inst;
		}
	}
	private function __clone(){}
	function insert($table,$data){
		$str1='';
		$str2='';
		foreach ($data as $key => $value) {
			$str1.=$key.',';
			$str2.="'$value'".',';
		}
		$key_str=rtrim($str1,',');
		$value_str=rtrim($str2,',');
		$sql="insert into $table($key_str) values($value_str)";
		$res=mysql_query($sql);
		return $res;
	}
	public function selectAll($table,$where=1){
		// $u_id=session('user.id');
		// $arr="select * from $table where id=$u_id ";
		$sql="select * from $table where $where";
		$res=mysql_query($sql);
		// $str=mysql_query($str);
		// return $str;
		return $res;
	}
	public function del($table,$id){
		$sql="delete from $table where id='$id'";
		$res=mysql_query($sql);
		return $res;
	}
	public function login($table,$username,$pwd){
		$sql="select * from $table where username='$username' and pwd='$pwd'";
		$res=mysql_query($sql);
		return $res;

	}
	public function save($table,$arr){
		$str_one='';
		foreach ($arr as $key => $value) {
			$str_one.=$key.'='."'$value'".',';
		}
		$str_one=rtrim($str_one,',');
		$sql="update $table set $str_one where id =".$arr['id'];
		$res=mysql_query($sql);
		return $res;
	}
}
	$obj= Single::getIns();
	// $db = Single::getIns();
?>