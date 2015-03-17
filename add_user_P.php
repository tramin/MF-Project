<html>
<body>

<?php
include ('DB_Connect.php');

$U_Name = $_POST['U_Name'];
$Pass_U = $_POST['Pass_U'];
$C_Pass = $_POST['C_Pass'];
$E_Mail = $_POST['E_Mail'];

$sql = mysql_query("INSERT INTO regis_tb(U_Name,Pass_U,C_Pass,E_Mail) VALUES('$U_Name','$Pass_U','$C_Pass','$E_Mail') ");


if($sql){
	?>
	<script type="text/javascript">window.location = "index.html" </script>
	<?php
	
}else{
	?>
	<a href "index.html">dsgsdv</a>
	<?php
}
?>
</body>
</html>
