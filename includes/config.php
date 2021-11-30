<?php 
// DB credentials.
define('DB_HOST','sql304.epizy.com');
define('DB_USER','epiz_30477627');
define('DB_PASS','94NwDn3dqDJ');
define('DB_NAME','epiz_30477627_srms');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>