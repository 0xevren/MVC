<?php

 class baseModel {
 	
 	public $_db;
 	
 	public function __construct(){
 		$this->_db = DB::getInstance();
 	}
 }
?>
