<?php


abstract class baseController {

	protected  $_registry;
	
	protected  $load;
	
	#Load ve Registry başlat 
	public function __construct(){
		$this->_registry = Registry::getInstance(); 
		$this->load = new Load;
	}
	
	abstract public function index();
	
		
	

}	

?>
