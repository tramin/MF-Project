<?php
include "DB_Connect.php";
$errmsg = "";

if($_POST)
{
	foreach($_POST as $k => $v)
	{
		if(get_magic_quotes_gpc())
		{
			$v = stripcslashes($v);
		}

		$v = trim(htmlspecialchars($v));

		if(empty($v))
		{
			$errmsg = "";break;
		}

		$_POST[$k] = $v;
	}
	if($errmsg == "")
	{
		$txtU_Name = $_POST['txtU_Name'];
		$txtPass = $_POST['txtPass'];
		$txtC_Pass = $_POST['txtC_Pass'];
		$txtE_Mail = $_POST['txtE_Mail'];

		$sql = "INSERT INTO regis_tb (U_Name,Pass,C_Pass,E_Mail) VALUES ('$_POST[txtU_Name]','$_POST[txtPass]','$_POST[txtC_Pass]','$_POST[txtE_Mail]')";

		@mysql_query($sql) or die(mysql_error());

	}

	header("Refresh:3; url=index.php");
	mysql_close();
}

?>
