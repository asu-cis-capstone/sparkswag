<?php

//Model.php handles all business logic
//Makes available all variables view needs to display.
//Handles DB insert, select.....


require_once("DB/connect.php");
$database = new DB();

class Model {

	//Functions will start with get for get requests
	//and post for post requests.
	public function getHomePage()
	{
		return;
	}
	
	public function getAddOpportunity()
	{
		return;
	}
	public function CreateUser(){
		global $database;
		d($_POST);
		//$fileName = $this->uploadPhoto('profilepic');
		
		$paramsArray = array(
			':UserNum'  => null,
			':fname' => $_POST['firstname'],
			':lname' => $_POST['lastname'],
			':mname' => null,
			':address' => null,
			':city' => null,
			':state' => null,
			':zip' => null,
			':institution' => $_POST['institution'],
			':fieldOfStudy' => $_POST['fieldofstudy'],
			':email' => $_POST['email'],
			':DOB' => $_POST['birthday'],
			':photo' => null,
			':role' => $_POST['role'],
			':username' => $_POST['username'],
			':hashedpass' => hash('sha256', $_POST['password'])
			);
		//d($paramsArray);
		$didItWork = $database->InsertUser($paramsArray);
		//d($didItWork);
		
		if($didItWork === true){
			return 'Account Created successfully';
		}
	}
	public function UserLogIn(){
		global $database;
		//d($_POST);
		$paramsArray = array(
		 ':username' => $_POST['username'],
		 ':hashedpass' => hash('sha256', $_POST['password'])
		 );
		 //d($paramsArray);
		
		$tuple = $database->CheckUserandPass($paramsArray);
		if($tuple !== false){
			$_SESSION["userInfo"] = $tuple;
		}
		return $tuple;
		//d($tuple);
		//d($_SESSION);
	}
	
	public function UserLogOut(){
		session_destroy();
	}
	public function CreateOpportunity(){
		global $database;
		
		$fileName = $this->uploadPhoto('logo1');
		
		//d($_SESSION);
		$paramsArray = array(
			':ListingNum'  => null, 
			':StaffNum'  => 1,//$_SESSION['userInfo']['UserNum'],
			':name'  => $_POST['name'], 
			':positionAvailable'  => $_POST['positions'], 
			':detailedDescription'  => $_POST['description'], 
			':category'  => "test", 
			':discipline'  => $_POST['discipline'], 
			':startDate'  => $_POST['startdate'], 
			':endDate'  => $_POST['enddate'], 
			':deadline'  => $_POST['deadline'], 
			':institution'  => $_POST['institution'], 
			':institutionType'  => $_POST['institutiontype'], 
			':logo'  => $fileName, 
			':opportunityHomepage'  => $_POST['homepage'], 
			':locationCity'  => $_POST['locationCity'], 
			':locationState'  => $_POST['locationState'], 
			':gpaRequire'  => $_POST['gpareq'], 
			':gradeRequire'  => $_POST['gradereq'], 
			':paid'  => isset($_POST['paid']) ? true : false
		 );
		
		//d($paramsArray);
		$result = $database->InsertOpportunity($paramsArray);
		//d($result);
	}
	public function ShowListing($listNum){
		global $database;
		$result = $database->ShowListing($listNum);
		return $result;
		
	}
	public function ShowAllListings(){
		global $database;
		$result = $database->ShowAllListings();
		return $result;
		
	}
	public function uploadPhoto($inputName){
		//<input type="file" name="$inputName">
		
		$doUpload = true;
		$saveToDir = 'upimage/';
		$saveToFile = $saveToDir . basename($_FILES[$inputName]["name"]);
		//d($saveToFile);
		$typeofFile = strtolower(pathinfo($saveToFile)['extension']);
		//d($typeofFile);
		$imageCheck = getimagesize($_FILES[$inputName]["tmp_name"]);
		//d($imageCheck);
		$saveToFile = $saveToDir . $this->RandomFileName() .'.'. $typeofFile;
		if($imageCheck === false){
			$doUpload = false;
		}
		if(file_exists($saveToFile)){
			//file exists and this is a bad thing!
			return $this->uploadPhoto($inputName);
			
		}
		//d($_FILES[$inputName]["size"]);
		if($_FILES[$inputName]["size"] > 3000000){
			$doUpload = false;
		}
		if( $typeofFile === 'jpg' ||
			$typeofFile === 'jpeg' ||
			$typeofFile === 'png' ||
			$typeofFile === 'gif' 
		){
			//do nothing
		}else{
			$doUpload = false;
		}
		//d($doUpload);
		if($doUpload === true){
			move_uploaded_file($_FILES[$inputName]["tmp_name"], $saveToFile);
			return $saveToFile;
		}
	}
	
	public function RandomFileName(){
		$strang = '';
		for($i=0; $i<20; $i++){
			$strang .= mt_rand(0,9);
		}
		return $strang;
	}
}
?>
