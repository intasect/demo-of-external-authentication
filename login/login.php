<?php
include ("../common/db.php");

define ( "UID_PWD", "UID_PWD" );
define ( "UID_PWD_IP", "UID_PWD_IP" );
define ( "UID_PWD_IP_CER", "UID_PWD_IP_CER" );

if ($_SERVER ["REQUEST_METHOD"] == "POST") {
	// username and password sent from Form
	$userId = mysqli_real_escape_string ( $db, $_POST ['userId'] );
	$password = mysqli_real_escape_string ( $db, $_POST ['password'] );
	$authType = mysqli_real_escape_string ( $db, $_POST ['authType'] );
	
	$sql = "SELECT * FROM CERTIFICATION_MAP WHERE USER_ID='$userId' and PASSWORD='$password' and AUTH_TYPE='$authType'";
	$result = mysqli_query ( $db, $sql );
	$row = mysqli_fetch_array ( $result, MYSQLI_ASSOC);
	$count = mysqli_num_rows ( $result );
	
	// If result matched $myusername and $mypassword, table row must be 1 row
	if ($count == 1) {
		$_SESSION ['login_user'] = $userId;
		//header ( "Location: welcome.php" );
		echo "ようこそ、".$userId."様。";
	} else {
		$msg;
		if ($authType == UID_PWD)
		{
			$msg = "ユーザーIDまたはパスワードが正しくありません";
		} 
		else if ($authType == UID_PWD_IP)
		{
			$msg = "ユーザーID、パスワードまたはIPアドレスが正しくありません";
		} 
		else if ($authType == UID_PWD_IP_CER)
		{
			$msg = "ユーザーID、パスワード、IPアドレスまたはクライアント証明書が正しくありません";
		}
		
		echo $msg."のためログインできません";
	}
}