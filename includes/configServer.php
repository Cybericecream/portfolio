<?php
ob_start();
session_start();

//database credentials
define('DBHOST','162.241.217.111');
define('DBUSER','nathaox2_george');
define('DBPASS','gjbwz7Yi=&A]');
define('DBNAME','nathaox2_georgesDatabase');

$db = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
// $db = new PDO('mysql:host=localhost;dbname=nathaox2_ggs', 'nathaox2_george', 'qwerty');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


?>
