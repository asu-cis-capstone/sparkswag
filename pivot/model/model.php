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
			':role' => null,//$_POST['role'],
			':username' => $_POST['username'],
			':hashedpass' => hash('sha256', '123456')
			);
		d($paramsArray);
		$didItWork = $database->InsertUser($paramsArray);
		d($didItWork);
		
		if($didItWork === true){
			return 'Account Created successfully';
		}
	}
	
	public function UserLogIn(){
		global $database;
		d($_POST);
		$paramsArray = array(
		 ':username' => $_POST['username'],
		 ':hashedpass' => hash('sha256', $_POST['password'])
		 );
		 d($paramsArray);
		
		$userInfo = $database->CheckUserandPass($paramsArray);
		d($userInfo);
	}
	
}

?>
