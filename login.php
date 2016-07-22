<?php

$page_title = 'Login';

?>
<?php include 'header.php'; ?>
	<div id = "navigation">
		<tr><td><a href = "index.php">Home</a></td><td>&nbsp;&nbsp;&nbsp;</td> 
		<td><a href = "student_register.php">Register</a></td><td>&nbsp;&nbsp;&nbsp;</td></tr>
	</div>


	<div id="login" align="center">
		<h3>Log In</h3><br />
		<form action="login_check.php" method="post">
			<p>	<tr><td>Type: <input type="radio" name="usertype" value="radio_stud_reg" checked /> Student <input type="radio" name="usertype" value="radio_admin_reg"/> Admin</td></tr></p>
			<p>Username: <input type="text" name="username" id="username" /></p>
			<p>Password: <input type="password" name="password" id="password" /></p>
			<input type="submit" value="Login" name="submit_login" /></p>
		</form>
	</div>

<?php include 'footer.php'; ?>