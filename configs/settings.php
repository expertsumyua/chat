<?php
/*
Файл для настроекс сайта
*/

// название сайта
$siteName = "Веб чат";

$userID = null;
$userID_fromWhom = null;

if(isset($_COOKIE["userID"])){
	$userID = $_COOKIE["userID"];
	$userID_fromWhom = $_COOKIE["userID"];
}

?>