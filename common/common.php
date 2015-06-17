<?php
// https check
if (!isset($_SERVER["HTTPS"]) || $_SERVER["HTTPS"] != 'on') {
	$serverName = (!empty($_SERVER['HTTP_HOST'])) ? strtolower($_SERVER['HTTP_HOST']) : ((!empty($_SERVER['SERVER_NAME'])) ? $_SERVER['SERVER_NAME'] : getenv('SERVER_NAME'));
	header("Location: ".$serverName."/index.php");
	exit;
}
$currentFile = $_SERVER['PHP_SELF'];
session_start();
// login check
$userID = $_SESSION['userId'];
if(!isset($userID))
{
	header("Location: /index.php");
	exit;
}