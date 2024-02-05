<?php 
	function sendMail($userName,$pass,$to,$sub,$msg){
		require_once 'class.phpmailer.php';
		$mail = new PHPMailer();
		try {
			//$mail->SMTPDebug =3; 
			$mail->isSMTP(); 
			$mail->Host       = 'smtp.hostinger.com';
			$mail->SMTPAuth   = true;
			$mail->IsHTML(true);
			$mail->CharSet	='UTF-8';
			$mail->Username   = $userName;
			$mail->Password   = $pass;
			$mail->SMTPSecure = 'ssl';
			$mail->Port       = 465;
			$mail->setFrom($userName);
			//$mail->addAddress('joe@example.net', 'Joe User');
			$mail->addAddress($to);
			//$mail->addReplyTo('info@example.com', 'Information');
			//$mail->addCC('cc@example.com');
			//$mail->addBCC('bcc@example.com');
			//$mail->addAttachment('/var/tmp/file.tar.gz'); 
			//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');
			$mail->Subject = $sub;
			$mail->Body    = $msg;
			$mail->send();
			return true;
			} catch (Exception $e) {
				return false;
			}
	}
?>

