<?php 
	require 'script/init.php';		//connection
	
    if ($_POST['usertype'] == "radio_stud_reg")
    {
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$campus_id=$_POST['campus_id']; 
	$email=$_POST['email']; 
	$addr1=$_POST['addr1']; 
	$city=$_POST['city']; 
	$state=$_POST['state']; 
	$zip=$_POST['zip']; 
	$username=$_POST['username']; 
	$password=$_POST['password'];
	
	
	
        $sql= "INSERT INTO student_login VALUES ('','$firstname','$lastname','$campus_id','$email','$addr1','$city','$state','$zip','$username','$password')";
	$result=mysql_query($sql);
	header('Location: http://localhost/dbproject/schedule_appointment.php');
    }
    else if ($_POST['usertype'] == "radio_admin_reg")
    {
	
		$firstname=$_POST['firstname'];
	echo $firstname;
	$lastname=$_POST['lastname'];
	$username=$_POST['username']; 
	$password=$_POST['password'];
	
        $sql= "INSERT INTO admin_login VALUES ('','$firstname','$lastname','$username','$password')";
	$result=mysql_query($sql);
	echo"success admin_login";
    header('Location: http://localhost/dbproject/admin_index.php');
    }

  ?>


