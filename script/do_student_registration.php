<?php
echo "yes";

include_once("connect.php");
if (isset($_POST['action']) && $_POST['action'] == "check") {
	
	$username = mysql_real_escape_string(strip_tags($_POST['username']));
	
	// Username already exists
		$username_query = mysql_query("SELECT username FROM users WHERE username='$username' LIMIT 1");
		if (mysql_num_rows($username_query) == 1) {
			// Username already exists
			echo 2;
			exit();
		} else {
			// Everything is fine to use.
			echo 0;
			exit();
		}
	
}
if (isset($_POST['action']) && $_POST['action'] == "register") {
	$firstname = mysql_real_escape_string(strip_tags($_POST['firstname']));
	$lastname = mysql_real_escape_string(strip_tags($_POST['lastname']));
	
	$username = mysql_real_escape_string(strip_tags($_POST['username']));
	$password = mysql_real_escape_string(strip_tags($_POST['password']));
		
	$reg_query = mysql_query("INSERT INTO users (firstname, lastname, username, password) VALUES ('".ucfirst(strtolower($firstname))."', '".ucfirst(strtolower($lastname))."', '$username', '".md5($password)."')");
	if ($reg_query) {
		// Successfully registered and can create users folders and send activation email
		$new_userid = mysql_insert_id();
		
				echo 1;
		exit();
	} else {
		// Registration failed
		echo 0;
		exit();
	}
}
?>