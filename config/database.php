<?php 

# avoid this file from being accessed directly
if(!defined('CP_STOCK_RUNNING')){
    exit(1);
}

require_once 'constants.php';
# Database class is used when we are not in a wordpress environment
class Database{
    
    public $conn;
    
    // get the database connection
    public function getConnection(){
       //echo "Connecting...<br>";
        $this->conn = null;
        
        try{
            $this->conn = new PDO("mysql:host=" . WAREHOUSE_HOST . ";dbname=" . WAREHOUSE_DATABASE, WAREHOUSE_USER, WAREHOUSE_PASSWORD);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);            
            $this->conn->exec("set names utf8");
            echo "Connected<br>";
        }catch(PDOException $exception){
            print_r($exception);
            echo "Error Connecting to DB<br>";
        }
        
        return $this->conn;
    }
}



