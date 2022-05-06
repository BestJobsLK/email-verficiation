<?php 


	// mail sending code

	$to	 		  = ''; // receiver
	$sender		  = ''; // email address of the sender
	$mail_subject = '';
	$email_body   = '';

	$header       = "From: {$sender}\r\nContent-Type: text/html;";

	$send_mail_result = mail($to, $mail_subject, $email_body, $header);

	if ( $send_mail_result ) {
		// mail sent successfully
	} else {
		// mail could not be sent 
	}
 ?>