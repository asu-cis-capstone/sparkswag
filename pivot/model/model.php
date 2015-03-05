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
	public function getCreateUser(){
		return;
	}
	
}

?>
