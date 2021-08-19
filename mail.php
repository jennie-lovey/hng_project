<?php
	require 'vendor/autoload.php';
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

	$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
	$dotenv->safeLoad();
	$emailTo = "jennyobiekea@gmail.com"; // Enter your email for feedbacks here

	$subject = "Contact form message";

	$mail = new PHPMailer(true);
	try {
		//Server settings
		$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
		$mail->isSMTP();                                            //Send using SMTP
		$mail->Host       = $_ENV['SMTP_HOST'];                     //Set the SMTP server to send through
		$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
		$mail->Username   = $_ENV['SMTP_USERNAME'];                     //SMTP username
		$mail->Password   = $_ENV['SMTP_PASSWORD'];                               //SMTP password
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
		$mail->Port       = $_ENV['SMTP_PORT'];                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
	
		//Recipients
		$mail->setFrom($_POST['email'], 'Mailer');
		$mail->addAddress('jennyobiekea@gmail.com', 'Admin');     //Add a recipient
		$mail->addAddress($_POST['email']);               //Name is optional
		// $mail->addReplyTo('info@example.com', 'Information');
		// $mail->addCC('cc@example.com');
		// $mail->addBCC('bcc@example.com');
		$body = "";
		$body .= "<p><b>Name: </b>".$_POST['name']."</p>";
		$body .= "<p><b>Email: </b>".$_POST['email']."</p>";
		$body .= "<p><b>Subject: </b>".$subject."</p>";
		$body .= "<p><b>Message: </b>".$_POST['message']."</p>";
		//Content
		$mail->isHTML(true);                                  //Set email format to HTML
		$mail->Subject = $subject;
		$mail->Body    = $body;
		$mail->AltBody = 'Alternative text';
		$mail->send();
		header('location:congratulation.php');
	} catch (Exception $e) {
		// print_r($e->getMessage());
		header('location:error.php');
	}
	

	// reset($_POST);

	// $body = "";
	// $body .= "<p><b>Name: </b>".$_POST['name']."</p>";
	// $body .= "<p><b>Email: </b>".$_POST['email']."</p>";
	// $body .= "<p><b>Subject: </b>".$subject."</p>";
	// $body .= "<p><b>Message: </b>".$_POST['message']."</p>";

	// if( mail($emailTo, $subject, $body, $headers) ){
	// 	$mail_sent = true;
	// 	header('location:congratulation.php');
	// } else {
	// 	header('location:error.php');
	// }
	

	// if(!isset($resp)){
	// 	echo json_encode($mail_sent);
	// }


?>
