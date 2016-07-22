<?php require_once 'script/connect.php'; ?>
	<div id = "navigation">
		<tr><td><a href = "admin_index.php">Home</a></td><td>&nbsp;&nbsp;&nbsp;</td> 
		<td><a href = "student_list.php">Student List</a></td><td>&nbsp;&nbsp;&nbsp;</td> 
		<td><a href = "groups.php">Groups</a></td><td>&nbsp;&nbsp;&nbsp;</td></tr>
		<td><a href = "campaigns.php">Campaigns</a></td><td>&nbsp;&nbsp;&nbsp;</td></tr>
	</div>
<?php
	$name=$_POST['name'];
	$addr=$_POST['addr'];
	$city=$_POST['city']; 
	$state=$_POST['state']; 
	$zip=$_POST['zip']; 
	$date=$_POST['date']; 
	$time=$_POST['time']; 
	
    $sql= "INSERT INTO campaign VALUES ('','$name','$date','$time','$addr','$city','$state','$zip')";
	$result=mysql_query($sql);
	header('Location: addCampaign.php?success');
	
?>