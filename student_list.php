<?php include 'header.php'; ?>

	
	<div id = "navigation">
		<tr><td><a href = "admin_index.php">Home</a></td><td>&nbsp;&nbsp;&nbsp;</td> 
		<td><a href = "student_list.php">Student List</a></td><td>&nbsp;&nbsp;&nbsp;</td> 
		<td><a href = "groups.php">Groups</a></td><td>&nbsp;&nbsp;&nbsp;</td></tr>
		<td><a href = "campaigns.php">Campaigns</a></td><td>&nbsp;&nbsp;&nbsp;</td></tr>
	</div>
	<br><br><br>
<?php		

$sql= "SELECT name, stud_id, reason, speciality, date, time, campaign, actions FROM appointment";
	$result=mysql_query($sql);
	//$rowcount=mysql_num_rows($result);
	
	echo "<table border='1' align='center'> 
	<tr bgcolor = 'orange'> 
	<th> Name </th> 
	<th> Student ID </th> 
	<th> Reason </th> 
	<th> Speciality </th>
	<th> Appointment Date </th> 
	<th> Appointment Time </th>
	<th> Campaign </th>	
	<th> Action </th>
	</tr>";

	while($row = mysql_fetch_array($result,MYSQL_ASSOC)) 
	{ 
	echo "<tr>"; 
	echo "<td>" . $row['name'] . "</td>"; 
	echo "<td>" . $row['stud_id'] . "</td>"; 
	echo "<td>" . $row['reason'] . "</td>";
	echo "<td>" . $row['speciality'] . "</td>";	
	echo "<td>" . $row['date'] . "</td>"; 
	echo "<td>" . $row['time'] . "</td>"; 
	echo "<td>" . $row['campaign'] . "</td>";
	echo "<td>" . $row['actions'] . "</td>";
	echo "</tr>";
	}
	
	echo "</table>";
	
?>

<?php include 'footer.php'; ?>