<?php
	class postsModel extends baseModel {
		public function getEntries(){
			$return = array();
			$return[0] = array('title'=>'Hello world');
			$return[1] = array('title2'=>'Hello world2');
			
			return $return;
		}
	}
?>
