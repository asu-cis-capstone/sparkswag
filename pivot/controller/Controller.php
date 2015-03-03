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
			if (isset($_GET['opportunity']))
			{
				$this->model->getAddOpportunity();
				require 'view/addopportunity.php';
				
			}elseif(isset($_GET['user'])){
				$this->model->getCreateUser();
				require 'view/createuser.php';
			}
			else
			{
				$this->model->getHomePage();
				require 'view/homepage.php';
			}
		}
	}

?>