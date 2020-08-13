<?php
require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer();


try{
	$mail->isSMTP();
	$mail->Host = "smtp.gmail.com";
	$mail->SMTPSecure = "ssl";
	$mail->Port = 465;
	$mail->SMTPAuth = true;
	$mail->Username = 'shinexdealer@gmail.com';
	$mail->Password = 'ju@261166';

	$mail->setFrom('shinexdealer@gmail.com', 'NoReply - Shinex Dealer');
	$mail->addAddress('isuru1302@gmail.com');
	$mail->Subject = 'SMTP email test';
	$mail->Body = 'this is some body';
	if($mail->Send()){
		echo "Mail sent";
	}


	
	
}

catch (phpmailerException $e) {
  echo $e->errorMessage(); //Pretty error messages from PHPMailer
} catch (Exception $e) {
  echo $e->getMessage(); //Boring error messages from anything else!
}
?>