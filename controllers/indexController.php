<?php


class indexController extends baseController {
	
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		 //echo "<pre>".print_r(__METHOD__,1)."</pre>";
		 //echo "<pre>".print_r($this->_registry->test,1)."</pre>";
		 //$this->_registry->myVar = "Hello from the controller";
		 
		 $this->load->model('posts');
		 
		 
		 $vars['title'] = 'Dynamic title';
		 $vars['posts'] = $this->_registry->posts->getEntries();
		 
		 $this->load->view('index', $vars);
		 //echo "<pre>".print_r($this->_registry->posts->getEntries(),1)."</pre>";
	}
	
	public function test(){
		echo "test";
	}
	
	
}

?>
