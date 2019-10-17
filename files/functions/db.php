<?php
define('DB_HOST', '10.56.45.133');
define('DB_USER', 'root');
define('DB_PASS', 'Sampoerna#19');
define('DB_NAME', 'hd_reg');
 
 

	
function connect() {
    $connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
 
  
   
 
    mysqli_set_charset($connect, "utf8");
	 
 
    return $connect;

}
	
	

	
?>