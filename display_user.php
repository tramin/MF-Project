<html>
<body>
<div>MANAGEMENT</div>
<table border="1px">
	<thead>
		<tr>
			<th>Name</th>
			<th>Pass</th>
			<th>C_Pass</th>
			<th>email</th>
			<th colspan="2" >Action</th>
		</tr>
		</thead>
		<tbody>
		<?php
		include ('DB_Connect.php');
		$rs = mysql_query("SELECT * FROM regis_tb ORDER BY Id ASC");
		while($val = mysql_fetch_array($rs)){
			?>
			<tr>
				<td><?php echo $val['U_Name']; ?></td>
				<td><?php echo $val['Pass_U']; ?></td>
				<td><?php echo $val['C_Pass']; ?></td>
				<td><?php echo $val['E_Mail']; ?></td>
				<td><a href="edit_user.php?Id=<?php echo $val['Id']; ?>">Edit</a></td>
				<td><a href="delete_user.php?Id=<?php echo $val['Id']; ?>">Delete</a></td>
			</tr>
	
			<?php
		}
		?>

	</tbody>
</table>
<a href="add_user.php">Add USER</a>
</body>
</html>



