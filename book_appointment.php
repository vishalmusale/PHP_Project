<?php 
	require_once("script/connect.php");		//connection
	
    
	$name=$_POST['name'];
	$sid=$_POST['sid'];
	$email=$_POST['email'];
	$reason=$_POST['reason'];
	$speciality=$_POST['speciality'];
	$date=$_POST['date'];
	$time=$_POST['time'];
	$campus_id=$_POST['campus_id'];
	
	//match campus id
	$sql1= "SELECT $campus_id IN (SELECT campus_id FROM student_login;);";
	$result=mysql_query($sql1);
	if($result === 1)
	{
		//insert data into appointment table
	$sql2= "INSERT INTO appointment VALUES ('','$name','$sid','$email','$reason','$speciality','$date','$time','','')";
	$result=mysql_query($sql2);
	
	header('Location: http://localhost/dbproject/schedule_appointment.php');
	}
	else
	
	
	header('Location: http://localhost/dbproject/schedule.php');
    
  ?>
