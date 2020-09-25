<?php
class Connection
{
	public $DBHOST = "localhost";
	public $DBNAME = "charts_data";
	public $DBUSER = "root";
	public $DBPASS = "";
	
	public $connection;
	
	public function __construct()
	{
		$this->connection = new PDO('mysql:host='.$this->DBHOST.';dbname='.$this->DBNAME.';charset=utf8', $this->DBUSER, $this->DBPASS);
		$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$this->connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	}
	
	public function fetchData($table)
	{
		$sql_code = "SELECT * FROM {$table}";
		$query = $this->connection->prepare($sql_code);
		$query->execute();
		$dataList = $query->fetchAll(PDO::FETCH_ASSOC);
		$totalRowSelected = $query->rowCount();

		if($totalRowSelected > 0)
			return $dataList;
		else
			return 0;
	}	
	
}
?>