<?php
require_once('DB/config.php');
	
class DB{
	
	private $host;
	private $user;
	private $pw;
	private $db;
	
	private $connection;
	private $insertUserSQL= 'INSERT INTO User (UserNum, fname, lname, mname, address, city, state, zip, institution, fieldOfStudy, email, DOB, photo, role, username, hashedpass) VALUES (:UserNum, :fname, :lname, :mname, :address, :city, :state, :zip, :institution, :fieldOfStudy, :email, :DOB, :photo, :role, :username, :hashedpass);';
	private $checkUserPassSQL ='select * from User where username = :username and hashedpass = :hashedpass;';
	
	private $insertListingSQL = 'INSERT INTO Listing (ListingNum ,StaffNum  ,name ,positionAvailable ,detailedDescription ,category ,discipline ,startDate ,endDate ,deadline ,institution ,institutionType ,logo ,opportunityHomepage ,locationCity ,locationState ,gpaRequire ,gradeRequire ,paid) VALUES (	:ListingNum ,:StaffNum , :name ,:positionAvailable ,:detailedDescription ,:category ,:discipline ,:startDate ,:endDate ,:deadline ,:institution ,:institutionType ,:logo ,:opportunityHomepage ,:locationCity ,:locationState ,:gpaRequire ,:gradeRequire ,:paid);';
	
	private $insertStaffSQL = 'INSERT INTO Staff (UserNum, department, staffCV, title) VALUES (:UserNum, :department, :staffCV, :title);';
	private $insertStudentSQL = 'INSERT INTO Student (UserNum, gpa, gradeLevel, major, studentResm) VALUES(:UserNum, :gpa, :gradeLevel, major, studentResm);';
	private $queryUserSQL = 'select * from User where username = :username;';
	private $findUserNum = 'select UserNum from User where username = :username;';
	private $queryOpportunitySQL = 'select * from Listing where ListingNum = :ListingNum;';
	private $queryAllOpportunitySQL = 'select * from Listing;';// where ListingNum = :ListingNum;';
	private $insertPhoto = 'Update User Set photo=:photo Where username = :userName';
	private $showRecentOpportunity = 'SELECT * FROM Listing ORDER BY ListingNum DESC LIMIT 5';
	private $findEmail = 'select * from User where email = :email';
	
	
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
		//d($tuple);
		if($tuple  !== false){
			return $tuple;
		}
		else{
			echo 'Failed showing user somehow!';
			return false;
		}
		
	}
	public function ShowListing($listNum){
		$statement = $this->connection->prepare($this->queryOpportunitySQL);
		$passOrFail = $statement->execute( array(':ListingNum' => $listNum) );
		$tuple = $statement->fetch(PDO::FETCH_ASSOC);
		//d($tuple);
		if($tuple  !== false){
			return $tuple;
		}
		else{
			echo 'Failed showing listing somehow!';
			return false;
		}
	}
	public function ShowRecentListings(){
		$statement = $this->connection->prepare($this->showRecentOpportunity);
		$passOrFail = $statement->execute();
		$tuple = $statement->fetchAll(PDO::FETCH_ASSOC);
		return $tuple;
	}
	public function ShowAllListings(){
		$statement = $this->connection->prepare($this->queryAllOpportunitySQL);
		$passOrFail = $statement->execute();
		$tuple = $statement->fetchAll(PDO::FETCH_ASSOC);
		//d($tuple);
		if($tuple  !== false){
			return $tuple;
		}
		else{
			echo 'Failed showing listing somehow!';
			return false;
		}
	}
	public function CheckUserandPass($paramsArray){
		$statement = $this->connection->prepare($this->checkUserPassSQL);
		$passOrFail = $statement->execute( $paramsArray);
		$tuple = $statement->fetch(PDO::FETCH_ASSOC);
		//d($tuple);
		return $tuple;
	}
	public function InsertOpportunity($paramsArray){
		$statement = $this->connection->prepare($this->insertListingSQL);
		$passOrFail = $statement->execute($paramsArray);
		return $passOrFail;
	}
	public function findUserNum($username){
		$statement = $this->connection->prepare($this->findUserNum);
		$passOrFail = $statement->execute($username);
		$tuple = $statement->fetch(PDO::FETCH_ASSOC);
		return $tuple['UserNum'];
	}
	public function InsertStaff($paramsStaffArray){
		$statement = $this->connection->prepare($this->insertStaffSQL);
		$passOrFail = $statement->execute($paramsStaffArray);
		return $passOrFail;
	}
	public function InsertPhoto($paramsArray){
		$statement = $this->connection->prepare($this->insertPhoto);
		$passOrFail = $statement->execute($paramsArray);
		return $passOrFail;
	}
	
	public function FindEmail($email){
		$statement = $this->connection->prepare($this->findEmail);
		$passOrFail = $statement->execute($email);
		$tuple = $statement->fetch(PDO::FETCH_ASSOC);
		return $tuple;
	}
	
}
?>
