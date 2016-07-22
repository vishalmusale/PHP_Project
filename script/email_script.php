<?php
function mail_all($subject, $body){
	$sql1= "SELECT name, stud_id, reason, speciality, date, time, campaign, email FROM appointment";
	$result1=mysql_query($sql1);
	while (($row = mysql_fetch_assoc($result1)) !== false)
	{
		email($row['email'], $subject, "Hello " . $row['name'] . ",\n\nThis is an friendly reminder that your appointment for ". $row['reason'] ." is scheduled on " . $row['date'] ." at " . $row['time'] . ". \n Please make to arrive 15 minutes prior the appointment to fill the requirement form." . $body . "\n\n");
	}
}


function email($to, $subject, $body){
	$to = "vishal.m.musale@gmail.com";
	//$subject = 'Appointment Reminder';
	//$body = 'Hello, \n This is an friendly reminder that your appointment is scheduled. \n Please make to arrive 15 minutes prior the appointment to fill the requirement form.';
	require_once("C:/xampp/htdocs/dbproject/PHPMailer/PHPMailerAutoload.php");

	$mail = new PHPMailer();
	$mail->IsSMTP(); // set mailer to use SMTP
	$mail->SMTPAuth = true;
	$mail->SMTPDebug  = 2; 
	
	$mail->Host = "smtp.gmail.com"; // specif smtp server
	$mail->Username = "vishal.m.musale@gmail.com"; // SMTP username
	$mail->Password = "googlenexuss"; // SMTP password
	$mail->SMTPSecure= "ssl"; // Used instead of TLS when only POP mail is selected
	$mail->Port = 465; // Used instead of 587 when only POP mail is selected
	
	$mail->From = "vishal.m.musale@gmail.com";
	$mail->FromName = "Vishal Musale";
	
	$mail->AddReplyTo("vishal.m.musale@gmail.com", "Reply Here");
	$mail->AddAddress($to, "googlenexuss"); //replace myname and mypassword to yours
	//$mail->AddAddress("paps.don007@gmail.com", "Pranit"); //replace myname and mypassword to yours
	
	$mail->Subject = $subject;
	$mail->Body = $body;
	
	$mail->WordWrap = 50; // set word wrap
	
	$mail->IsHTML(true); // set email format to HTML
	
	$var_dump = $mail->Send();

	if($var_dump) {
	header('Location: email_template.php?success');
	exit();
	}else {
	echo "Send mail fail";
	}
} 
?>
