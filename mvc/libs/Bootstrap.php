<?php
class Bootstrap{
	
	private $_url;
	private $_controller;
	
	public function init(){		

		$this->setURL();  // Step (1)  $this->_url kiểm tra url
		if(!isset($this->_url['controller'])){  // nếu ko tồn tại  $_GET['controller] -> 
			$this->loadDefaultController();     // -> in ra thư mục C:\xampp\htdocs\php_offline\DINH_PHPOFFLINE\mvc\views\index\index.php 
			exit();	
			
		}
		$this->loadExistController(); 
		$this->callControllerMethod();
		
	}
	// SET URL
	private function setURL(){                       
		$this->_url = isset($_GET) ? $_GET : null; 
		
		// kiểm tra  tồn tại $GET  	
	} 
	// LOAD DEFAULT CONTROLLER
	// Nếu không tồn tại $_GET['controller']
	private function loadDefaultController(){          //step (3)
		require_once (CONTROLLER_PATH .'index.php'); // CONTROLLER_PATH 
		$this->_controller = new Index();
		die();
		$this->_controller->index();  // Lỗi
	}
	// LOAD EXISTING CONTROLLER
	private function loadExistController(){
		$file = CONTROLLER_PATH . $this->_url['controller']. '.php';
		if(isset($file)){
			require_once $file; //
			$this->_controller = new $this->_url['controller'];
			$this->_controller->loadModel($this->_url['controller']);  
		}else{
			$this->error();
			
		}
	}
	// CALL METHODE
	private function callControllerMethod(){
		if(method_exists($this->_controller, $this->_url['action'] )==true){
			$this->_controller->{$this->_url['action']}();
		}else{
			$this->error();
		}
	}
	public function error(){
		require_once CONTROLLER_PATH .'errors.php';
		$error = new error();
		$error->index();
	}
}