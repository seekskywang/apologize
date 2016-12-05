<?php
function protect_page(){
	if(logged_in() === false){
		header('Location: protected.php');
		exit();
	}
}

function sendmail($to,$sub,$body){
	include_once 'mail/class.phpmailer.php';
	include_once 'mail/class.smtp.php';
	$mail = new PHPMailer;
	$mail ->isSMTP();
	$mail ->Host = "smtp.qq.com";
	$mail -> SMTPAuth = true;
	$mail ->SMTPKeepAlive = true;
	$mail -> Username = "164788665@qq.com";
	$mail ->Password = "hhbemxcoficcbgcc";
	$mail ->CharSet = "utf-8";
	//	$mail->SMTPSecure = "ssl";
	//	$mail->Port       = 25;

	$mail->Subject = $sub;
	$mail-> Body = $body;
	$mail -> setFrom('164788665@qq.com','Karaz');
	$mail -> addAddress($to,'Q');

	if($mail->send()){
		echo 'mail sent';
	}else{
		echo 'mailer error';
	}

}