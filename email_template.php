<?php include 'header.php';
require_once 'script/email_script.php';?>
<?php
if (isset($_GET['success']) === true && empty(($_GET['success']) === true)){
	echo 'Email has been sent';
}
?>
<?php
if (empty($_POST) === false)
{
	if (empty($_POST['subject']) === true){
	echo "Subject is required! \n";
	
	}
	
	if (empty($_POST['body']) === true){
	echo "Body is required!\n";
	}
	else {echo 'send';
	mail_all($_POST['subject'], $_POST['body']);
	
	}
	
	
	
	//header('Location: email_template.php?success');
	//exit();
}
?>
<form action = "" method = "post">
	<br><br><br><br>
	<tr>
		<td>Subject: </td>
		<td><input type="text" name="subject">	</td></tr><br><br><br>
		<tr><td>Body:</td>
		<td><textarea name="body"></textarea></td></tr><br><br><br>
		<tr><td><input type = "submit" value = Send></td>	</tr>
	
	</form>


<?php include 'footer.php'; ?>