<?php
//Database Connection
define('db_host', '10.56.45.133');
define('db_user', 'root');
define('db_password', 'Sampoerna#19');
define('db_name', 'hd_reg');
class db_conn
{
    private $conn;
    function __construct()
    {
    }
    function connect()
    {
        $this->conn = new mysqli(db_host, db_user, db_password, db_name);
        if (mysqli_connect_errno()) {
            echo "Connection failed" . mysqli_connect_error();
        }
        return $this->conn;
    }
}
?>