<?php

	/* Simple order form script 
		Uses $_POST variables: email, model, date
	**/

    include('phpqrcode/qrlib.php'); 
    
	$name = htmlspecialchars($_POST['name']);
	$email = htmlspecialchars($_POST['email']);
	$model = htmlspecialchars($_POST['message']);


	$mail_subject = "QR code for ".$name;
	$mail_content = $name.", here is your QR code\r\n \r\n";
	$mail_address = $email;   
    

	$mail_content = wordwrap($mail_content, 70, "\r\n");
	$headers = 'X-Mailer: PHP/'.phpversion();
	mail($mail_address, $mail_subject, $mail_content, $headers);

	
?>
