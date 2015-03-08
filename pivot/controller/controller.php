<?php
//Controller class acts as a router.
//Will decide which model and view to call.
	//$_SESSION['userInfo'] = "";
	require_once("model/model.php");
	$thisSite = $_SERVER["REQUEST_SCHEME"]. '://' . $_SERVER["SERVER_NAME"]. '/';
	
	class Controller {
		public $model; //should be object
		
		public function __construct()  
		{  
			$this->model = new Model();
		} 
		
		public function start($route)
		{	
			global $thisSite;
			//$isSignedIn = true;
			$isSignedIn = false;
			
			switch($route[1]){
			case 'opportunity':
				if(count($_POST) > 0){
					//d($_FILES);
					$pageTitle = 'Research Opportunity Created';
					$this->model->CreateOpportunity();
					require 'view/addopportunitysuccess.php';
				}else{
					//View will have access to any $variables declared.
					$pageTitle = 'Create Research Opportunity';
					//$this->model->getAddOpportunity();
					require 'view/addopportunity.php';
				}
			break;
			
			case 'createaccount':
				$pageTitle = 'Create User Account';
				if(count($_POST) > 0)
				{	
					$successMsg = $this->model->CreateUser();
					require 'view/createusersuccess.php';
				}else{
					require 'view/createuser.php';
				}
			break;
			
			case 'myaccount':
				$pageTitle = 'My Account';
				require 'view/myaccount.php';
			break;
			
			case 'opportunitylist':
				if(isset($route[2])){
					$pageTitle = 'Opportunity List';
					$listingRow = $this->model->ShowListing($route[2]);
					//d($route[2]);
					//d($listingRow);
					require 'view/singleopportunity.php';
				}else{
					$allListings = $this->model->ShowAllListings();
					
					$pageTitle = 'Opportunity List';
					require 'view/opportunitylist.php';
				}
			break;
			
			case 'login':
				$pageTitle = 'Log in to Spark Open Research';
				if(count($_POST) > 0)
				{
					$successMsg = $this->model->UserLogIn();
					if($successMsg !== false){
						require 'view/loginsuccess.php';
					}
					else{
						require 'view/login.php';
					}
					//d($successMsg);
					
				}else{
					require 'view/login.php';
				}
			break;
			
			case 'logout':
				$pageTitle = 'Log out from Spark Open Research';
				$this->model->UserLogOut();
				require 'view/logout.php';
			break;
			
			case 'admin':
				$pageTitle = 'Administration Panel';
				//$this->model->UserLogOut();
				require 'view/admin.php';
			break;
			
			default:
				//Nothing matched.  Defaulting to homepage.
				$pageTitle = 'Spark Open Research Database';
				//$this->model->getHomePage();
				require 'view/homepage.php';
			break;
			
			}
		
		}
	}

?>
