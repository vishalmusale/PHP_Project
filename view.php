<?php include 'header.php'; ?>

	<div id = "navigation">
		<tr><td><a href = "schedule_appointment.php">Home</a></td><td>&nbsp;&nbsp;&nbsp;</td> 
		
	</div>
	<br><br><br>
<?php		
	$sql= "SELECT name, stud_id, date, time, campaign FROM appointment";
	$result=mysql_query($sql);
	//$rowcount=mysql_num_rows($result);
	
	echo "<table border='1' align='center'> 
	<tr bgcolor = 'orange'> 
	<th> Name </th> 
	<th> Student ID </th> 
	
	<th> Appointment Date </th> 
	<th> Appointment Time </th>
	<th> Campaign </th>	
	
	</tr>";

	while($row = mysql_fetch_array($result,MYSQL_ASSOC)) 
	{ 
	echo "<tr>"; 
	echo "<td>" . $row['name'] . "</td>"; 
	echo "<td>" . $row['stud_id'] . "</td>"; 
	echo "<td>" . $row['date'] . "</td>"; 
	echo "<td>" . $row['time'] . "</td>"; 
	echo "<td>" . $row['campaign'] . "</td>";
	echo "</tr>";
	}
	
	echo "</table>";
?>

<?php include 'footer.php'; ?>