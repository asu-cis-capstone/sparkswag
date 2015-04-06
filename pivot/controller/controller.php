<?php
//Controller class acts as a router.
//Will decide which model and view to call.
	//$_SESSION['userInfo'] = "";
	require_once("model/model.php");
	$thisSite = $_SERVER["REQUEST_SCHEME"]. '://' . $_SERVER["SERVER_NAME"]. '/';
	
	class Controller {
		private $model; //should be object
		
		public function __construct()  
		{  
			$this->model = new Model();
		} 
		
		public function start($route)
		{	
			global $thisSite;
			
			if($this->model->AccessPermissions($route[1]) === false){
				$pageTitle = 'Not Authorized';
				require 'view/notauthorized.php';
				return;
			}
			
			
			
			switch($route[1]){
			case 'createopportunity':
				if(count($_POST) > 0){
					//d($_FILES);
					$error = $this->model->validateOpportunity();
					//d($error);
					if(empty($error)){
						$pageTitle = 'Research Opportunity Created';
						$this->model->CreateOpportunity();
						require 'view/addopportunitysuccess.php';
					}
					else {
						$pageTitle = 'Create Research Opportunity';
						require 'view/addopportunity.php';						
					}
				}else{
					//View will have access to any $variables declared.
					$pageTitle = 'Create Research Opportunity';
					require 'view/addopportunity.php';
				}
			break;
			
			case 'register':
				$pageTitle = 'Register User Account';
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
				$successMsg ='';
				if(count($_POST) > 0){
					$successMsg = $this->model->UpdateUserField();
				}
				
				require 'view/myaccount.php';
				
			break;
			
			case 'opportunities':
				if(isset($route[2])){
					$pageTitle = 'Opportunities';
					$listingRow = $this->model->ShowListing($route[2]);
					//d($route[2]);
					//d($listingRow);
					require 'view/singleopportunity.php';
				}else{
					$Listings = (count($_POST) > 0)? $this->model->Search() : $this->model->ShowRecentListings();
					
				
					$pageTitle = 'Opportunity List';
					require 'view/opportunitylist.php';
				}
			break;
			
			case 'login':
				$pageTitle = 'Log in to Sparklr Research Database';
				$errorMessage = '';
				if(count($_POST) > 0)
				{
					$errorMessage .= $this->model->UserLogIn();
					if($errorMessage === ''){
						require 'view/loginsuccess.php';
						return;
					}
				}
				require 'view/login.php';
			break;
			
			case 'logout':
				$pageTitle = 'Log out from Sparklr Research Database';
				$this->model->UserLogOut();
				require 'view/logout.php';
			break;
			
			case 'admin':
				if(isset($route[2]) && $route[2] === 'approval'){
					$pageTitle = 'Opportunities Pending Approval';
					$approved;
					if(count($_POST) > 0){
						$approved = $this->model->ApproveOpportunity();
					}
					$needsApproval = $this->model->ShowPendingApproval();
					
					require 'view/adminapproval.php';
				}else{
					$pageTitle = 'Administration Panel';
					require 'view/admin.php';
				}
			break;
			
			case 'forgotpassword':
				if(count($_POST) > 0)
				{
					$errorMessage = $this->model->SendPasswordReset();
					$pageTitle = 'Forgot Password';
					require 'view/forgotpasswordsent.php';
				}else{
					$pageTitle = 'Forgot Password';
					require 'view/forgotpassword.php';
				}
			break;
			
			default:
				//Nothing matched.  Defaulting to homepage.
				$pageTitle = 'Sparklr Research Database Database';
				require 'view/homepage.php';
			break;
			
			}
		
		}
	}

?>
