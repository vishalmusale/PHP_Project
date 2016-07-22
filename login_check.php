<?php
	
	require_once("script/connect.php");
	
	// username and password sent from form 
	$username=$_POST['username']; 
	$password=$_POST['password']; 

	// To protect MySQL injection (more detail about MySQL injection)
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);
	
	if ($_POST['usertype'] == "radio_stud_reg")
    {
		$sql= "SELECT * FROM student_login WHERE username= '" .$username. "' AND password='".$password."';";
		$result=mysql_query($sql);

		// Mysql_num_row is counting table row
		$row_count=mysql_num_rows($result);

		// If result matched $myusername and $mypassword, table row must be 1 row
		if($row_count==1){

			// Register $myusername, $mypassword and redirect to file "login_success.php"
			//$_SESSION("username");
			//$_SESSION("password"); 
			
			header('Location: http://localhost/dbproject/schedule_appointment.php');
		}
		else {
			echo "Wrong Username or Password";
		}
	}
	
	else{
		$sql= "SELECT * FROM admin_login WHERE username= '" .$username. "' AND password='".$password."';";
		$result=mysql_query($sql);

		// Mysql_num_row is counting table row
		$row_count=mysql_num_rows($result);

		// If result matched $myusername and $mypassword, table row must be 1 row
		if($row_count==1){

			// Register $myusername, $mypassword and redirect to file "login_success.php"
			//$_SESSION("username");
			//$_SESSION("password"); 
			//header("location:login_success.php");
			echo"success";
			header('Location: http://localhost/dbproject/admin_index.php');
		}
		else {
			echo "Wrong Username or Password";
		}
	}
?>