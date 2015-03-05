<?php
require_once('DB/config.php');
	
class DB{
	
	private $host;
	private $user;
	private $pw;
	private $db;
	
	private $connection;
	private $insertUserSQL= 'INSERT INTO i1208878_drup1.User (UserNum, fname, lname, mname, address, city, state, zip, institution, fieldOfStudy, email, DOB, photo) VALUES (:UserNum, :fname, :lname, :mname, :address, :city, :state, :zip, :institution, :fieldOfStudy, :email, :DOB, :photo);';
	
	
	//private $insertUserSQL = 'insert into users (fname, lname, username, email, hashedPassword, levelOfAccess) values (:fname, :lname, :userName, :email, :hashedPassword, :levelOfAccess);';
	private $queryUserSQL = 'select * from users where userName = :userName;';
	
	//DB object constructor
	public function __construct (){
		$DBconfig = new Config;
	
		$this->host = $DBconfig->dbhost;
		$this->user = $DBconfig->dbuser;
		$this->pw = $DBconfig->dbpw;
		$this->db = $DBconfig->dbname;
		
	
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
