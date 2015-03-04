<?php
//Controller class acts as a router.
//Will decide which model and view to call.
	require_once("model/Model.php");
	
	class Controller {
		public $model;
		
		public function __construct()  
		{  
			$this->model = new Model();
		} 
		
		public function start()
		{	
			//$isSignedIn = true;
			$isSignedIn = false;

		
			//This page is called when index.php?opportunity
			if (isset($_GET['opportunity']))
			{
				//View will have access to any $variables declared.
				$pageTitle = 'Create Research Opportunity';
				//$this->model->getAddOpportunity();
				require 'view/addopportunity.php';
				
			}elseif(isset($_GET['createaccount'])){
				$pageTitle = 'Create User Account';
				//$this->model->getCreateUser();
				require 'view/createuser.php';
				
			}elseif(isset($_GET['myaccount'])){
				$pageTitle = 'My Account';
				require 'view/myaccount.php';
				
				
			}elseif(isset($_GET['opportunitylist'])){
				$pageTitle = 'Opportunity List';
				require 'view/opportunitylist.php';
			
			}elseif(isset($_GET['login'])){
				$pageTitle = 'Log in to Spark Open Research';
				require 'view/login.php';
			}
			else
			{
				//Nothing matched.  Defaulting to homepage.
				$pageTitle = 'Spark Open Research Database';
				//$this->model->getHomePage();
				require 'view/homepage.php';
			}
		}
	}

?>