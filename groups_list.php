<?php include 'header.php'; ?>


<?php 


// select all items
if($_POST['grp'] === "blank"){	
	$sql1= "SELECT name, stud_id, reason, speciality, date, time, campaign, actions FROM appointment";
	$result1=mysql_query($sql1);
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

	while($row1 = mysql_fetch_array($result1,MYSQL_ASSOC)) 
	{ 
	echo "<tr>"; 
	echo "<td>" . $row1['name'] . "</td>"; 
	echo "<td>" . $row1['stud_id'] . "</td>"; 
	echo "<td>" . $row1['reason'] . "</td>";
	echo "<td>" . $row1['speciality'] . "</td>";	
	echo "<td>" . $row1['date'] . "</td>"; 
	echo "<td>" . $row1['time'] . "</td>"; 
	echo "<td>" . $row1['campaign'] . "</td>";
	echo "<td>" . $row1['actions'] . "</td>";
	echo "</tr>";
	}
	
	echo "</table>";
	}
	//Group By selected type
	elseif($_POST['grp'] === 'event'){
	$sql2= "SELECT name, stud_id, reason, speciality, date, time, campaign, actions FROM appointment	GROUP BY campaign;";
	$result2=mysql_query($sql2);
	
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

	while($row2 = mysql_fetch_array($result2,MYSQL_ASSOC)) 
	{ 
	echo "<tr>"; 
	echo "<td>" . $row2['name'] . "</td>"; 
	echo "<td>" . $row2['stud_id'] . "</td>"; 
	echo "<td>" . $row2['reason'] . "</td>";
	echo "<td>" . $row2['speciality'] . "</td>";	
	echo "<td>" . $row2['date'] . "</td>"; 
	echo "<td>" . $row2['time'] . "</td>"; 
	echo "<td>" . $row2['campaign'] . "</td>";
	echo "<td>" . $row2['actions'] . "</td>";
	echo "</tr>";
	}
	
	echo "</table>"; 
	}
	
	//Group By city
	elseif($_POST['grp'] === 'city'){
	$sql3= "SELECT a.name, a.stud_id, s.city, a.reason, a.speciality, a.date, a.time, a.campaign, a.actions FROM appointment AS a, student_login AS s	HAVING a.stud_id == s.campus_id GROUP BY city;";
	$result3=mysql_query($sql3);
	
	echo "<table border='1' align='center'> 
	<tr bgcolor = 'orange'> 
	<th> Name </th> 
	<th> Student ID </th> 
	<th> City </th>
	<th> Reason </th> 
	<th> Speciality </th>
	<th> Appointment Date </th> 
	<th> Appointment Time </th>
	<th> Campaign </th>	
	<th> Action </th>
	</tr>";

	while($row3 = mysql_fetch_array($result3,MYSQL_ASSOC)) 
	{ 
	echo "<tr>"; 
	echo "<td>" . $row3['name'] . "</td>"; 
	echo "<td>" . $row3['stud_id'] . "</td>"; 
	echo "<td>" . $row3['city'] . "</td>";
	echo "<td>" . $row3['reason'] . "</td>";
	echo "<td>" . $row3['speciality'] . "</td>";	
	echo "<td>" . $row3['date'] . "</td>"; 
	echo "<td>" . $row3['time'] . "</td>"; 
	echo "<td>" . $row3['campaign'] . "</td>";
	echo "<td>" . $row3['actions'] . "</td>";
	echo "</tr>";
	}
	
	echo "</table>"; 
	}
	
	//Group By state
	elseif($_POST['grp'] === 'state'){
	$sql4= "SELECT a.name, a.stud_id, s.state, a.reason, a.speciality, a.date, a.time, a.campaign, a.actions FROM appointment AS a, student_login AS s	HAVING a.stud_id == s.campus_id GROUP BY state;";
	$result4=mysql_query($sql4);
	
	echo "<table border='1' align='center'> 
	<tr bgcolor = 'orange'> 
	<th> Name </th> 
	<th> Student ID </th> 
	<th> State </th>
	<th> Reason </th> 
	<th> Speciality </th>
	<th> Appointment Date </th> 
	<th> Appointment Time </th>
	<th> Campaign </th>	
	<th> Action </th>
	</tr>";

	while($row4 = mysql_fetch_array($result4,MYSQL_ASSOC)) 
	{ 
	echo "<tr>"; 
	echo "<td>" . $row4['name'] . "</td>"; 
	echo "<td>" . $row4['stud_id'] . "</td>"; 
	echo "<td>" . $row4['state'] . "</td>";
	echo "<td>" . $row4['reason'] . "</td>";
	echo "<td>" . $row4['speciality'] . "</td>";	
	echo "<td>" . $row4['date'] . "</td>"; 
	echo "<td>" . $row4['time'] . "</td>"; 
	echo "<td>" . $row4['campaign'] . "</td>";
	echo "<td>" . $row4['actions'] . "</td>";
	echo "</tr>";
	}
	
	echo "</table>"; 
	}
	?>
	

<?php include 'footer.php'; ?>