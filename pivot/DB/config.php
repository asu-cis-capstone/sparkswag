<?php
class Config{
	public $dbhost;
	public $dbuser;
	public $dbpw;
	public $dbname;
	
	public function __construct (){
		$this->dbhost = 'localhost';
		$this->dbuser = 'root';
		$this->dbpw = '';
		$this->dbname = 'test';
	}

}



?>
