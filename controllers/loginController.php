<?php
class loginController extends baseController{
	    
	    private $_kadi;
	    private $_sifre;
	    private $_sifremd5; 
	    public $_postlogin; //$_POST["login"];
	    private $_hata;	
	    private $_loginok;
	
	public function __construct() {
		parent::__construct();
		Session::init();				
	}
	
	
	public function index(){
	
        $this->_postlogin = isset($_POST["login"]) ? 1 : 0;       
        $this->_kadi = $_POST["kadi"];
        $this->_sifre = $_POST["sifre"];
        $this->_sifremd5  = md5($this->_sifre);          
        $this->_hata = array();			
		
		if($this->_postlogin==1){
			
			#Login Model çağır
			$this->load->model('login');
			
			#Login kontrol et
			$this->_loginok = $this->_registry->login->veritabanibasla($this->_kadi,$this->_sifremd5);	
			
			#Login Yapıldıysa
			if($this->_loginok == TRUE){
													
				Session::set('_kadi', $this->_kadi);
				Session::set('_sifre', $this->_sifremd5);			
				$this->load->view('logged', $vars=null);
				print_r($_SESSION);
				exit;
				
			}else{
				
				$this->load->view('login', $vars=null);
				Session::destroy();
				exit;
				
			}
			
		}else{
			
			$this->load->view('login', $vars=null);
			echo 'post gelmedi';
			exit;
		}
		
	}
	
	public function out(){
		
		Session::destroy();
		$this->load->view('login', $vars=null);
		echo "cikis yapildi";
		print_r($_SESSION);
		exit;
		
	}	
	

}
?>	