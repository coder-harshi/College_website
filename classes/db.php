<?php
class db
{
	public $host = "localhost";
	public $user = "root";
	public $password = "";
	public $dbname = "clg";
	public $conn;
public function __construct()
	{
		$this->conn = new mysqli($this->host,$this->user,$this->password,$this->dbname);
	}
  public function insert($qry)
	{
			$this->conn->query($qry);

	}
public function show_data($qry)
{
// echo $qry;
	$result=$this->conn->query($qry);
	$row=$result->fetch_all(MYSQLI_ASSOC);
// print_r($row);
//   	 exit();
return $row;
}
public function show_where($qry)
{
$result=$this->conn->query($qry);
$row=$result->fetch_all(MYSQLI_ASSOC);
return $row;
}
public function update($qry)
{
	$res=$this->conn->query($qry);
	return $res;
}
public function delete($qry)
{
	$r=$this->conn->query($qry);
	return $r;
}
public function checkuser($qry)
{
	$res = $this->conn->query($qry);
 // print_r($res);
 // exit();
 @
	$count = $res->num_rows;
	// echo $count;
	// exit();
	return $count;

}
// public function show($qry)
// {
//
// 	$result=$this->conn->query($qry);
// 	$row=$result->fetch_assoc();
// // print_r($row);
// //
// // 	 exit();
// 	return $row;
// 	}

}
?>
