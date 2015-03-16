<?php
@mysql_connect("localhost","root","3131") or die(mysql_error());
@mysql_select_db("in_pro") or die (mysql_error());

/*$strSQL = "INSERT INTO user_db (U_Name,Pass,C_Pass,E_Mail) VALUES ('$_POST[txtU_Name]','$_POST[txtPass]','$_POST[txtC_Pass]','$_POST[txtE_Mail]')";
$objQuery = mysql_query($strSQL);
if($objQuery)
{
	echo "Save Done.";
}
else
{
	echo "Error Save [".$strSQL."]";
}
mysql_close($objConnect);*/
?>
