<?php
include ('DB_Connect.php');

$Id = $_GET['Id'];
$sql = mysql_query("DELETE FROM regis_tb WHERE Id = $Id");


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