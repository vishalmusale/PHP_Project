<?php
// page properties that are used by header.php to use within this page
$page_title = 'Student Registration';

?>
<?php include 'header.php'; ?>
	
	
	<div id = "navigation">
		<a href = "index.php">Home</a>
	</div>
	
	<div style="float:left;" align="center">
	<h3>Register</h3>
	<form action="reg_enter.php" method="post">
	<table id="registration">
	<tr><td>Type: <input type="radio" name="usertype" value="radio_stud_reg" checked /> Student <input type="radio" name="usertype" value="radio_admin_reg"/> Admin</td></tr>
	<tr><td>First Name: </td><td><input type="text" size="30" name="firstname" id="firstname" /></td></tr>
	<tr><td>Last Name: </td><td><input type="text" size="30" name="lastname" id="lastname" /></td></tr>
	
	<tr><td>Campus ID: </td><td><input type="text" size="30" name="campus_id" id="campus_id" /></td></tr>
	<tr><td>Email: </td><td><input type="text" size="30" name="email" id="email" /></td></tr>
	<tr><td>Address: </td><td><input type="text" size="30" name="addr1" id="addr1" /></td></tr>
	<tr><td>City: </td><td><input type="text" size="30" name="city" id="city" /></td></tr>
	<td>State: </td><td><input type="text" size="30" name="state" id="state" /></td></tr>
	<td>Zip: </td><td><input type="text" size="30" name="zip" id="zip" /></td></tr>
	
	<tr><td>Username: </td><td><input type="text" size="30" name="username" id="username" /></td></tr>
	<tr><td>Password: </td><td><input type="password" size="30" name="password" id="password" /></td></tr>
	<tr><td>Retype Password: </td><td><input type="password" size="30" name="password2" id="password2" /></td></tr>
	
	<tr><td colspan="2" align="right"><span id="reg_span" style="padding-right:10px;"></span><button name="reg_submit" id="reg_submit" />Register</button></td></tr>
	</table>
	</div>
	</form>
	
	<div style="clear:both;"></div>

<?php include 'footer.php'; ?>