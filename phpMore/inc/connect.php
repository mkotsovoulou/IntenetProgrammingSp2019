<?php
//echo "Connect file included";
include_once ("config.php");
try {
	$db = new PDO("mysql:host=" . DB_HOST .
                   ";dbname=" . DB_NAME .
                   ";port="   . DB_PORT, DB_USER, DB_PASS);
	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$db->exec("SET NAMES 'utf8'");
  /*echo ("Connection successful");*/
} catch (Exception $e) {
	echo "Could not connect to the database.";
	exit;
}