
<?php
class DbConnection{

	const DB_HOST='0.0.0.0:3306';
	const DB_NAME='Login';
	const DB_USER='root';
	const DB_PASSWORD='root';

	private $conn=null;

	// open database connection 
	public function connect(){
		$connectionString=sprintf("mysql:host=%s;dbname=%s",self::DB_HOST,self::DB_NAME);
		try {
			$this->$conn=new PDO($connectionString,self::DB_USER,self::DB_PASSWORD);
		} 
		catch(PDOException $pe) {
			die($pe->getMessage());
		}
	}
	
	public function getConn(){
	  return $this->$conn;
	}
	
	public function closeConn(){
	  $this->$conn=null;
	}
}
?>
 
 
 
 
