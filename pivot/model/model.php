<?php

//Model.php handles all business logic
//Makes available all variables views need to display.
//Handles DB insert, select.....


require_once("DB/connect.php");
$database = new DB();

class Model {


	public function CreateUser(){
		global $database;
		 
		//$fileName = $this->uploadPhoto('profilepic');
		$username = array(
			':username' => $_POST['username']
		);
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
		//d($_POST['role']);
		if($_POST['role'] === 'professional'){
			$paramsStaffArray = array(
				':UserNum' => $database->findUserNum($username),
				':department' => $_POST['department'],
				':title' => $_POST['title'],
				':professionalType' => $_POST['professionaltype']
				
			);
			$staffTable = $database->InsertStaff($paramsStaffArray);
			//d($staffTable);
			//d($paramsStaffArray);
			
		}
		if($_POST['role'] === 'student'){
			$paramsStudentArray = array(
				':UserNum' => $database->findUserNum($username),
				':gpa' => $_POST['gpa'],
				':gradeLevel' => $_POST['gradeLevel'],
				':major' => $_POST['major']
			);
			$studentTable = $database->InsertStudent($paramsStudentArray);
			//d($studentTable);
			//d($paramsStudentArray);
			
		}

		return ($didItWork === true) ?  '' : 'Database insertion failed.';
		
	}
	public function UserLogIn(){
		global $database;
		$errorMessage = '';
		//d($_POST);
		$paramsArray = array(
		 ':username' => $_POST['username'],
		 ':hashedpass' => hash('sha256', $_POST['password'])
		 );
		 //d($paramsArray);
		
		$tuple = $database->CheckUserandPass($paramsArray);
		if($tuple !== false){
			$_SESSION["userInfo"] = $tuple;
		}else{
			$errorMessage .= 'Username and password do not match.';
		}
		return $errorMessage;
		
	}
	
	public function UserLogOut(){
		session_destroy();
	}
	public function CreateOpportunity(){
		global $database;
		
		//$fileName = $this->uploadPhoto('logo1');
		
		//d($_SESSION);
		$paramsArray = array(
			':ListingNum'  => null, 
			':StaffNum'  => 1,//$_SESSION['userInfo']['UserNum'],
			':title'  => $_POST['title'], 
			':positionAvailable'  => $_POST['positions'], 
			':detailedDescription'  => $_POST['description'], 
			':experienceType' => $_POST['experienceType'],
			':startDate'  => $_POST['startdate'], 
			':endDate'  => $_POST['enddate'], 
			':deadline'  => $_POST['deadline'], 
			':institution'  => $_POST['institution'], 
			':institutionType'  => $_POST['institutiontype'], 
			':url'  => $_POST['url'], 
			':locationCity'  => $_POST['locationCity'], 
			':locationState'  => $_POST['locationState'], 
			':gpaRequire'  => $_POST['gpareq'], 
			':gradeRequire'  => $_POST['gradereq'], 
			':paid'  => isset($_POST['paid']) ? true : false,
			':hoursPerWeek' => $_POST['hoursPerWeek'],
			':howToApply' => $_POST['howToApply'],
			':additionalDoc' => isset($_POST['additionalDoc']) ? $_POST['additionalDoc'] : NULL,
			':keywords' => $_POST['keywords'],
			':specialReq' => $_POST['specialReq']
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
	
	public function ShowRecentListings(){
		global $database;
		$result = $database->ShowRecentListings();
		return $result;
	}
	public function uploadDocument($inputName){
		//<input type="file" name="$inputName">
		
		$doUpload = true;
		$saveToDir = 'docs/';
		$saveToFile = $saveToDir . basename($_FILES[$inputName]["name"]);
		//d($saveToFile);
		$typeofFile = strtolower(pathinfo($saveToFile)['extension']);
		//d($typeofFile);
		//$imageCheck = getimagesize($_FILES[$inputName]["tmp_name"]);
		//d($imageCheck);
		$saveToFile = $saveToDir . $this->RandomNumbers() .'.'. $typeofFile;
		//if($imageCheck === false){
		//	$doUpload = false;
		//}
		if(file_exists($saveToFile)){
			//file exists and this is a bad thing!
			return $this->uploadDocument($inputName);
			
		}
		//d($_FILES[$inputName]["size"]);
		if($_FILES[$inputName]["size"] > 3000000){
			$doUpload = false;
		}
		if( $typeofFile === 'doc' ||
			$typeofFile === 'docx' ||
			$typeofFile === 'pdf' ||
			$typeofFile === 'txt' 
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
	
	public function RandomNumbers($length = 20){
		$strang = '';
		for($i=0; $i<$length; $i++){
			$strang .= mt_rand(0,9);
		}
		return $strang;
	}
	
	public function SendPasswordReset(){
		global $database;
		$param = array( ':email' => $_POST['email']);
		$tuple = $database->FindEmail($param);
		$newPass = $this->RandomNumbers(8);
		$errorMessage = '';
		
		if($tuple === false){
			$errorMessage .= 'Email address not found.';
		}else{
			$passUpdated = $database->UpdatePassword([
				':UserNum' => $tuple['UserNum'],
				':hashedpass' => hash('sha256', $newPass)
				]);
			if($passUpdated === true){
				$mailSent = mail(
					$_POST['email'],
					'Spark Open Research - Password Reset',
					'Your new password is: '. $newPass ,
					'From: DoNotReply <donotreply@sparkopenresearch.com>'
				);
				if($mailSent === false){
					$errorMessage .= 'Email failed to send.';
				}
			}else{
				$errorMessage .= 'Password update failed.';
			}
			
		}
		return $errorMessage;
	}
	
	public function AccessPermissions($page){
		switch($page){
			case 'admin':
				if( !isset($_SESSION['userInfo']) || 
					!isset($_SESSION['userInfo']['role']) ||
					$_SESSION['userInfo']['role'] !== 'admin'){
					return false;
				}
			break;
			
			case 'myaccount':
				if( !isset($_SESSION['userInfo']) || 
					!isset($_SESSION['userInfo']['role']) ){
					return false;
				}
			break;
			
			case 'createopportunity':
				if( !isset($_SESSION['userInfo']) || 
					!isset($_SESSION['userInfo']['role']) ||
					$_SESSION['userInfo']['role'] !== 'profession'){
					return false;
				}
			break;
			
			default:
				return true;
			break;
		}
	}
	
	public function Search(){
		$city = isset($_POST['city']) ? $_POST['city'] : '' ;
		$state = isset($_POST['state']) ? $_POST['state'] : '' ;//$_POST['state'];
		$text = isset($_POST['searchText']) ? $_POST['searchText'] : '' ;//$_POST['searchText'];
		$gradeLevel = isset($_POST['gradeLevel']) ? $_POST['gradeLevel'] : '' ;
		$params = [];
		$query = 'select * from Listing where approved = 1';
		
		if((isset($city) && strlen($city) > 0)
			|| (isset($state) && strlen($state) > 0)
			|| (isset($text) && strlen($text) > 0)
			|| (isset($gradeLevel) && strlen($gradeLevel) > 0)
		){
			$query .= ' and ';
		}

		if(isset($city) && strlen($city) > 0){
			$query .= " locationCity = :city";
			$params[':city'] = $city;
			if(isset($state) && strlen($state) > 0
				|| (isset($text) && strlen($text) > 0)
				|| (isset($gradeLevel) && strlen($gradeLevel) > 0)
				){
				$query .= ' and ';
			}
		}
		if(isset($state) && strlen($state) > 0){
			$query .= " locationState = :state";
			$params[':state'] = $state;
			if((isset($text) && strlen($text) > 0)
				|| (isset($gradeLevel) && strlen($gradeLevel) > 0)
			){
				$query .= ' and ';
			}
		}
		if(isset($text) && strlen($text) > 0){
			$keywords = explode(' ', $text);
			$query .= '((';
			$descr = [];
			$i = 0;
			foreach($keywords as $word){
				$key = ':word'. (string)$i;
				$descr[] = " detailedDescription like $key";
				$params[$key] = "%$word%";
				//d($i);
				$i++;
			}
			$query .= implode(' or ', $descr);
			$query .= ') or (';
			$title = [];
			$i = 0;
			foreach($keywords as $word){
				$key = ':word'. (string)$i;
				$title[] = " title like $key";
				$i++;
			
			}
				$query .= implode(' or ', $title);
			$query .= '))';
			if(isset($gradeLevel) && strlen($gradeLevel) > 0){
				$query .= ' and ';
			}
		}
		if(isset($gradeLevel) && strlen($gradeLevel) > 0){
			$query .= ' gradeLevel =  :gradeLevel';
			$params[':gradeLevel'] = $gradeLevel;
		}
		$query .= ';';
		//d($query);
		//d($params);
		global $database;
		$result = $database->ShowSearchListings($query, $params);
		return $result;
	}
	
	
	
	public function validateOpportunity(){
		$error = "";
		if(empty($_POST['title']) || strlen($_POST['title']) < 6 || strlen($_POST['title']) > 100) {
			$error .= "Name is required and must be between 6-100 characters.";
		}
		if(empty($_POST['description']) || strlen($_POST['description']) < 10) {
			$error .= $error . "\\nDescription is required and must be atleast 10 characters.";
		}
		if(strlen($_POST['keywords']) > 150) {
			$error .= $error . "\\nKeywords can only contain 150 characters.";
		}
		if(strlen($_POST['positions'] > 20)) {
			$error .= $error . "\\nPositions Available cannot exceed 20 characters.";
		}
		/*
		if(!empty($_POST['startdate']) && !empty($_POST['enddate']) && !empty($_POST['deadline'])) {
			if($this->validateDate($_POST['startdate']) && $this->validateDate($_POST['startdate']) && $this->validateDate($_POST['startdate'])) {
			}
			else {
				$error = $error . "\\nStart date, end date, and application deadline must be in mm/dd/yyyy format.";
			}
		}
		else {
			$error = $error . "\\nStart date, end date, and application deadline is required.";
		}*/
		if(!is_int((int)$_POST['hoursPerWeek']) || strlen($_POST['hoursPerWeek']) > 2) {
			$error .= $error . "\\nHours/Week must be an integer and can only be a maximum of 2 digits.";
		}
		if(strlen($_POST['institution']) > 50) {
			$error .= $error . "\\nInstitution cannot exceed 50 characters.";
		}
		if(strlen($_POST['institutiontype']) > 50) {
			$error .= $error . "\\nInstitution type cannot exceed 50 characters.";
		}
		if(strlen($_POST['experienceType']) > 50) {
			$error .= $error . "\\nExperience type cannot exceed 50 characters.";
		}
		if(strlen($_POST['url']) > 50) {
			$error .= $error . "\\nThe URL cannot exceed 50 characters.";
		}
		if(empty($_POST['locationCity']) || strlen($_POST['locationCity']) < 2 || strlen($_POST['locationCity']) > 50) {
			$error .= $error . "\\nCity is required and must be between 2-50 characters.";
		}
		if(empty($_POST['locationState']) || strlen($_POST['locationState']) < 2 || strlen($_POST['locationState']) > 15) {
			$error .= $error . "\\nState is required and must be between 2-15 characters.";
		}
		if(strlen($_POST['gradereq']) > 10){
			$error .= $error . "\\nGrade Level Requirements field cannot exceed 10 characters.";
		}
		if(strlen($_POST['specialReq']) > 50) {
			$error .= $error . "\\nSpecial Requirements field cannot exceed 50 characters.";
		}
		if(strlen($_POST['gpareq']) > 10) {
			$error .= $error . "\\nGPA Requirement field cannot exceed 10 characters.";
		}
		if(empty($_POST['howToApply'])) {
			$error .= $error . "\\nHow to apply field is required.";
		}
		return $error;	
	}
	/*
	public function validateDate($testDate) {
		$testDate = explode('/', $testDate);
		$month = $testDate[1];
		$day = $testDate[2];
		$year = $testDate[0];
		if(count($testDate) === 3) {
			if(checkdate($month, $day, $year)) {
				return true;
			}
			else {
				return false;
			}
		}
		else {
			return false;
		}
	}*/
	public function UpdateUserField(){
		global $database;
		//d($_POST);
		$keys = array_keys($_POST);
		//d($keys[0]);
		//d($_SESSION);
		
		$paramsArray = [];
		$paramsArray[':value'] = $_POST[$keys[0]];
		$paramsArray[':UserNum'] = $_SESSION['userInfo']['UserNum'];
		//d($paramsArray);
		$result = $database->UpdateUserInfo($paramsArray, $keys[0]);
		//d($result);
		if($result === true){
			$_SESSION['userInfo'][$keys[0]] = $_POST[$keys[0]];
		}
		
		return $result;
		
	}
	public function ShowPendingApproval(){
		global $database;
		$result = $database->ShowUnapproved();
		return $result;
	}
	
	public function ApproveOpportunity(){
		global $database;
		$approved = [];
		$approved['succeeded'] = [];
		$approved['failed'] = [];
		
		foreach($_POST['ListingNum'] as $listing){
			//d($listing);
			$paramsArray = [];
			$paramsArray[':ListingNum'] = $listing;
			//d($listing);
			$result = $database->ApproveOpportunity($paramsArray);
			//d($result);
			if($result === true){
				$approved['succeeded'][] = $listing;
			}else{
				$approved['failed'][] = $listing;
			}
		}
		return $approved ;
	}
	
	public function ImportOpportunity(){
		global $database;
		//ini_set("auto_detect_line_endings", true);
		$csv = $_FILES['importFile']['tmp_name'];
		$fileHandle = fopen($csv, "r");
		d($fileHandle);
		d($fileHandle);
		d($fileHandle);
		d($fileHandle);
		
		$rows = [];// = fgetcsv($fileHandle, 0, ",");
		while(!feof($fileHandle)) {
			$rows[] = fgetcsv($fileHandle);
		}
		d($rows);
		$failedInsert = [];
		foreach ($rows as $rowNum => $row) {
			if($rowNum < 3){ continue; }

			$paramsArray = array(
			':ListingNum'  => null, 
			':StaffNum'  => $_SESSION['userInfo']['UserNum'],
			':title'  => $row[0], 
			':positionAvailable'  => $row[3], 
			':detailedDescription'  => $row[1], 
			':experienceType' => $row[10],
			':startDate'  => $row[4], 
			':endDate'  => $row[5], 
			':deadline'  => $row[7], 
			':institution'  => $row[8], 
			':institutionType'  => $row[9], 
			':url'  => $row[11], 
			':locationCity'  => $row[12], 
			':locationState'  => $row[13], 
			':gpaRequire'  => $row[16], 
			':gradeRequire'  => $row[14], 
			':paid'  => $row[17],
			':hoursPerWeek' => $row[6],
			':howToApply' => $row[18],
			':additionalDoc' => $row[19],
			':keywords' => $row[2],
			':specialReq' => $row[15]
		 	);
		
			//d($paramsArray);
			$result = $database->InsertOpportunity($paramsArray);
			d($result);

			if($result === false){
				$failedInsert[] = $row;
			}
			d($failedInsert);
		}
	}
	public function DeleteOpportunity($listID){
		global $database, $route;
		$paramsArray = [];
		$paramsArray[':ListingNum'] = $route[4];
		$result = $database->DeleteOpportunity($paramsArray);
		return $result;
		
	}
}
?>
