<?php
class DB{
	private $host = 'localhost';
	private $user = 'user';
	private $pw = 'pass';
	private $db = 'dbname';
	private $connection;
	private $insertUserSQL = 'insert into users (fname, lname, username, email, hashedPassword, levelOfAccess) values (:fname, :lname, :userName, :email, :hashedPassword, :levelOfAccess);';
	private $queryUserSQL = 'select * from users where userName = :userName;';
	
	//DB object constructor
	public function __construct (){
		try{
			$this->connection = new PDO("mysql:host=$this->host;dbname=$this->db", $this->user, $this->pw);
		}
		catch(PDOException $e){
			echo $e->getMessage();
			die();
		}
	}
	
	public function InsertUser($paramsArray){
		$statement = $this->connection->prepare($this->insertUserSQL);
		$passOrFail = $statement->execute($paramsArray);
		return $passOrFail;
	}
	
	public function ShowUser($userName){
		$statement = $this->connection->prepare($this->queryUserSQL);
		$passOrFail = $statement->execute( array(':userName' => $userName) );
		$tuple = $statement->fetch(PDO::FETCH_ASSOC);
		if($tuple  !== false){
			return $tuple;
		}
		else{
			return false;
			echo 'Failed showing user somehow!';
		}
		
	}

}
?>