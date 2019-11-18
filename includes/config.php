<?php
ob_start();
session_start();

$db = new PDO('sqlite:' . $_SERVER['DOCUMENT_ROOT'] . '/sql/database.sqlite');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


?>
