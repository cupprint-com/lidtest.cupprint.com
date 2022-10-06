<?php 
if(!defined('CP_STOCK_RUNNING')){
    exit(1);
}
# check if development file exists (must be excluded from GIT)
$filename=dirname(__FILE__) . '/development.txt';

# page title
$title="Leak Test";

/* Hardcoded DEV DB variables. Does development.txt exist ? 
$databaseHost = "localhost";
$databaseUser = "warehouse_development";
$databasePassword = "BEPFfuRuPvhXUUkf";
$databaseName = "warehouse_development";

# database host
$databaseHost='localhost';
# database name
$databaseName='warehouse';
# database user
$databaseUser='warehouse';
# database password
$databasePassword='LFaB8TBFsDenhndg';
*/

$databaseHost = "localhost";
$databaseUser = "warehouse_development";
$databasePassword = "BEPFfuRuPvhXUUkf";
$databaseName = "warehouse_development";




if (file_exists($filename)){  
    $leakTestForm = 'https://cupprint.typeform.com/to/hnqvIkMH';
    $leakTestFormID = 'hnqvIkMH';
    $title="DEV: Leak Test";
    # database name
    $databaseName='warehouse_development';
    # database user
    $databaseUser='warehouse_development';
    # database password
    $databasePassword='BEPFfuRuPvhXUUkf';
}

# local mysql settings
define('WAREHOUSE_HOST',$databaseHost);
define('WAREHOUSE_DATABASE',$databaseName);
define('WAREHOUSE_USER',$databaseUser);
define('WAREHOUSE_PASSWORD',$databasePassword);




