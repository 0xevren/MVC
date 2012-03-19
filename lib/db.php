
<?php
class DB {
        
        protected static $instance;

        protected function __construct() {}
        
        public static function getInstance() {
        
                if(empty(self::$instance)) {
                        
                        $db_info = array(
                                "db_host" => "localhost",
                                "db_port" => "3306",
                                "db_user" => "root",
                                "db_pass" => "w00tuser",
                                "db_name" => "mvc",
                                "db_charset" => "UTF-8"
                        );
                        
                        
                        try {                          
                               self::$instance = new PDO("mysql:host=".$db_info['db_host'].';port='.$db_info['db_port'].';dbname='.$db_info['db_name'], $db_info['db_user'], $db_info['db_pass']);
		//self::$instance = new PDO("mysql:host=localhost;, $db_info['db_user'], $db_info['db_pass']);
                              	self::$instance->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT );  
                              	self::$instance->setAttribute( PDO::MYSQL_ATTR_USE_BUFFERED_QUERY,true);  
                                self::$instance->query('SET NAMES utf8');
                                self::$instance->query('SET CHARACTER SET utf8');

                        }  
                        catch(PDOException $e) {  
                                echo $e->getMessage();  
                        }                          
                        
                }
                
                return self::$instance;
        
        }
   

}
/*
$db = DB::getInstance();
$say = $db-> prepare ( "SELECT count(*) from ders" ) ;
//
$say -> execute ( ) ;
$number_of_rows = $say->fetchColumn();
print_r($number_of_rows);
//
$s = $db-> prepare ( "SELECT * from ders" ) ;
$s -> execute ( ) ;
print_r($s);
//
//# setting the fetch mode  
$s->setFetchMode(PDO::FETCH_NUM); //FETCH_ROW 
print_r($s);

while($row = $s->fetch()) {  
    echo $row[0] . "\n";  
}

*/

?>
