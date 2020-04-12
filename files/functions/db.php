<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'hd_reg');
 
 

	
function connect() {
    $connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
 
  
   
 
    mysqli_set_charset($connect, "utf8");
	 
 
    return $connect;

}
	
	

	
?>