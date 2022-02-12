<?php
  
require_once __DIR__.'/db.php';

//This is Query Connection File
class Query extends DB{
	
	public $sql;
	private $rs;
	private $lastpk_id=0;
	
	public function insert($tablename,$formdata=[]){
		
	$columns = implode(",",array_keys($formdata));
	$values = implode("','",array_values($formdata));
	
	$SQL = "INSERT INTO {$tablename}($columns) values('$values');";
	$this->sql = $SQL;
	if($this->runQuery()){
		$this->lastpk_id=mysqli_insert_id($this->getConnection());
		return true;
	}else
	{
		return false;
	}
}
	public function getId(){
		return $this->lastpk_id;
	}
	public function getQuery(){
		return $this->sql;
	}	
	
	
public function select($columns='*'){
	$sql = "SELECT $columns FROM ";
	$this->sql = $sql;
	return $this;
}

public function table($tablename){

$this->sql = $this->sql."$tablename";
return $this;

}

public function where($column='',$operator='=',$value=''){
	
	$count = func_num_args();
	if($count == 2){
		$value = $operator;
		$column = $column;
		$this->sql = $this->sql. " WHERE $column = '$value'";
	}
	
	if($count == 3){
		
		$operator = $operator;
		$value = $value;
		$column = $column;
		
		$this->sql = $this->sql. " WHERE $column $operator '$value'";
	}
	if($count==1 and is_array($column)){
		$condition_arr = $column;
		
		$str = '';
		foreach($condition_arr as $key => $value){
			$str = $str . " {$key} = '{$value}' AND"; 
		}
		$str = substr($str,0,-4);
		$this->sql = $this->sql. " WHERE ".$str ;
	}
	
	return $this;
	
}

public function update($tablename,$formdata){
	
	$sql = "UPDATE {$tablename} SET";
	$str = '';
	foreach($formdata as $column => $value){
		$str = $str." $column = '$value',";
	}
	$str = substr($str,0,-1);
	$this->sql = "".$sql." ".$str;
	return $this;
}



public function delete($tablename){
	
	$this->sql = "DELETE FROM {$tablename} ";
	return $this;
}

public function TRUNCATE($tablename){
	
	$this->sql = "TRUNCATE TABLE {$tablename} ";
	return $this;
}
private function runQuery(){
	$result_set=mysqli_query($this->getConnection(),$this->sql) or die(mysql_error($this->getConnection()));
	if(is_object($result_set)){
		if(mysqli_num_rows($result_set)>0){
			$this->rs=$result_set;
		}else{
			return false;
		}
	}else{
		$count=mysqli_affected_rows($this->getConnection());
		if($count>0){
			return true;
		}else
		{
			return false;
		}
	}
}


}

$query = new Query();
echo PHP_EOL;
$query->insert('emp',['name'=>'mohan','email'=>'mohan@gmail.com']);
echo $query->getQuery();

