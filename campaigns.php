<?php include 'header.php';?>

<div id = "navigation">
		<tr><td><a href = "admin_index.php">Home</a></td><td>&nbsp;&nbsp;&nbsp;</td> 
		<td><a href = "student_list.php">Student List</a></td><td>&nbsp;&nbsp;&nbsp;</td> 
		<td><a href = "groups.php">Groups</a></td><td>&nbsp;&nbsp;&nbsp;</td></tr>
		<td><a href = "campaigns.php">Campaigns</a></td><td>&nbsp;&nbsp;&nbsp;</td></tr>
</div>

<?php		

	$sql= "SELECT name, date, time, city FROM campaign";
	$result=mysql_query($sql);
	//$rowcount=mysql_num_rows($result);
	
	echo "<table border='1' align='center'> 
	<tr bgcolor = 'orange'> 
	<th> Name </th> 
	<th> Date </th> 
	<th> Time </th> 
	<th> Place </th>
	</tr>";

	while($row = mysql_fetch_array($result,MYSQL_ASSOC)) 
	{ 
	echo "<tr>"; 
	echo "<td>" . $row['name'] . "</td>"; 
	echo "<td>" . $row['date'] . "</td>"; 
	echo "<td>" . $row['time'] . "</td>";
	echo "<td>" . $row['city'] . "</td>";	
	echo "</tr>";
	}
	echo "</table>";
?>

	<form action = "addCampaign.php" method = "post">
	<input type="submit" value="Add Campaign" name="submit_login" />
	
	</form>
<?php include 'footer.php'; ?>