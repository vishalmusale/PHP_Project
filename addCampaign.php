<?php include 'header.php';?>
<div id = "navigation">
		<tr><td><a href = "admin_index.php">Home</a></td><td>&nbsp;&nbsp;&nbsp;</td> 
		<td><a href = "student_list.php">Student List</a></td><td>&nbsp;&nbsp;&nbsp;</td> 
		<td><a href = "groups.php">Groups</a></td><td>&nbsp;&nbsp;&nbsp;</td></tr>
		<td><a href = "campaigns.php">Campaigns</a></td><td>&nbsp;&nbsp;&nbsp;</td></tr>
		</div>
<?php
if (isset($_GET['success']) === true && empty(($_GET['success']) === true)){
	echo 'Campaign is successfully added';
}
?>

<?php
	/*$name=$_POST['name'];
	$addr=$_POST['addr'];
	$city=$_POST['city']; 
	$state=$_POST['state']; 
	$zip=$_POST['zip']; 
	$date=$_POST['date']; 
	$time=$_POST['time']; 
	
    $sql= "INSERT INTO campaign VALUES ('','$name','$date','$time','$addr','$city','$state','$zip')";
	$result=mysql_query($sql); */
	//header('Location: addCampaign.php?success');
?>


<form action = "newCampaign.php" method = "post">
	<br><br><br><br>
	
		Campaign Name: 
		<input type="text" name="name" /> <br> <br>
		Address:
		<input type="text" name="addr" /> <br><br>
		City: </td>
		<input type="text" name="city" /> <br><br>
		State: </td>
		<input type="text" name="state" /> <br><br>
		Zip: </td>
		<input type="text" name="zip" /> <br><br>
		<td>Date:</td>
		<input type="date" name="date" /> <br><br>
		<td>Time:</td>
		<input type="time" name="time" /> <br><br>
		
		<input type = "submit" value = Done />
	
</form>


<?php include 'footer.php'; ?>