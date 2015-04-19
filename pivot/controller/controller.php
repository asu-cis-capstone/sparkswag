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
					d($error);
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
					$errorMessage = "";
					$errorMessage = $this->model->CreateUser();

					if($errorMessage == "" ){
						require 'view/createusersuccess.php';
					}else{
						d($errorMessage);
						require 'view/createuser.php';
					}
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
					
					
				}elseif(isset($route[2]) && $route[2] === 'import'){
					$pageTitle = 'Import Opportunities';
					$imported;
					if(count($_FILES) > 0){
						$imported = $this->model->ImportOpportunity();
					}
					
					require 'view/adminimport.php';
				
				}elseif(isset($route[2]) && $route[2] === 'users' ){
						//&& isset($route[3]) 
						//&& $route[3]===''

                                        $pageTitle = 'User accounts';// - '. $route[3];
					$errorMessage = '';
					if(count($_POST) > 0 ){

                                        $errorMessage .= $this->model->CreateUser();
					}else{
					$errorMessage .= $this->model->ShowUsers();
							//DeleteOpportunity($route[4]);

                                        }
					require 'view/adminusers.php';

                                }
                                elseif(isset($route[2]) && $route[2] === 'delete' &&
						isset($route[3]) && $route[3] ==='opportunity'){

					$pageTitle = 'Deletion - '. $route[3];
					$errorMessage = $this->model->DeleteOpportunity($route[4]);
					
					require 'view/admindeletion.php';
					
				}
				elseif(isset($route[2]) && $route[2] === 'editopportunity')				
				{
					$pageTitle = 'Edit Opportunity';
                                        //$errorMessage = $this->model->DeleteOpportunity($route[4]);
					$errorMessage = '';
                                        require 'view/adminedit.php';
				}
				else{
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
			

			case 'verify':
				$pageTitle = 'Account verification';
				$isVerified = $this->model->VerifiyUser();
				require 'view/verified.php';
				
			break;

			case 'applyemailform':
				if(isset($route[2])){
					$staffNum = $route[2];
					$pageTitle = 'Apply Through Email';
					require 'view/applyemailform.php';
					d($email);
				}
				if(count($_POST) > 0) {
					$email = $this->model->getEmail($_POST['staffNum']);
					d($email);
					$sendEmail = $this->model->sendEmail($email);
					$pageTitle = 'Email Sent';
					require 'view/emailsent.php';
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
