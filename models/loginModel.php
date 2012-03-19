<?php 
	class loginModel extends baseModel {

		
	public function  __construct() {
		parent::__construct();
	}
		
    public function veritabaniBasla($kadi, $sifre) {
        
        $db = $this->_db;
        $say = $db-> prepare ("SELECT count(*) FROM t_kul_kullanici
                               WHERE kul_adi = :kadi AND kul_sifre = :sifre");
        $say->bindValue(':kadi', $kadi, PDO::PARAM_STR);                                          
        $say->bindValue(':sifre', $sifre, PDO::PARAM_STR);   
        $say -> execute();
        return $say->fetchColumn();


    }        
    
    public function veritabaniKontrol() {
        
        $db = DB::getInstance();
        $say = $db-> prepare ("SELECT * FROM t_kul_kullanici
                               WHERE kul_kadi = :kadi AND kul_yenisifre = :sifre
                                                ");
        $say->bindValue(':kadi', $_SESSION['_kadi'], PDO::PARAM_STR);                                          
        $say->bindValue(':sifre', $_SESSION['_sifre'], PDO::PARAM_STR);   
        $say -> execute () ;
        return $say->fetchColumn();

    }        
		
	}
	
	$a = New loginModel();
	$a ->veritabaniBasla('admin', 'e10adc3949ba59abbe56e057f20f883e');
?>