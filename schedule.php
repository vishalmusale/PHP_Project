<?php include 'header.php'; ?>
	
	<div id = "navigation">
		<a href = "schedule_appointment.php">Home</a>
	</div>
	
	<div style="float:left;" align="center">
	<h3>Appointment Scheduler</h3>
	<form action="book_appointment.php" method="post">
	<table id="registration">
	
	<tr><td>Name: </td><td><input type="text" size="30" name="name" id="name" /></td></tr>
	<tr><td>Student ID: </td><td><input type="text" size="30" name="sid" id="sid" /></td></tr>
	<tr><td>Email: </td><td><input type="email" name="email"></td></tr>
	<tr><td>Reason: </td><td><textarea name="reason" rows="5" cols="30"></textarea></td></tr>
	<tr><td>Speciality: </td><td><input type="text" size="30" name="speciality" id="speciality" /></td></tr>
	<tr><td>Date: </td><td><input type="date" name="date"></td></tr>
	<tr><td>Time: </td><td><input type="time" name="time"></td></tr>
	
	
	
	<tr><td colspan="2" align="right"><span id="reg_span" style="padding-right:10px;"></span><button name="reg_submit" id="reg_submit" />Schedule</button></td></tr>
	</table>
	</div>
	</form>
	
	<div style="clear:both;"></div>

<?php include 'footer.php'; ?>