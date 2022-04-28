<?php
	  $smtp_host='mail.compeermedicalinstitute.com';
	  $smtp_username='info@compeermedicalinstitute.com';
	  $smtp_password='$CMI@2022';
	  $smtp_port='465';
	  $sender_name='Compeer Medical Institute';
	  $currentDate=date("l, d F Y");
		
		require 'mail/PHPMailer/PHPMailerAutoload.php';
		
		$mail = new PHPMailer;
		$mail->SMTPDebug = 0;                               // Enable verbose debug output
		
		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = $smtp_host;  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = $smtp_username;                 // SMTP username
		$mail->Password = $smtp_password;                           // SMTP password
		$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = $smtp_port;                                    // TCP port to connect to
		
		$mail->SMTPOptions = array(
		'ssl' => array(
		'verify_peer' => false,
		'verify_peer_name' => false,
		'allow_self_signed' => true
		)
		);
		$mail->setFrom($smtp_username, $sender_name);

		$mail->WordWrap = 50;   
		$mail->isHTML(true);                                  // Set email format to HTML



?>








<?php 
if ($mail_to_send=='send_signup_email'){

$reciever_name="$firstname $lastname";

$message='
<div style="width:90%; margin:auto; height:auto;">
<img src="cid:sign_up_header_pix" width="100%">
	<div style="padding:15px; font-size:16px;">
		<p>
		Dear <strong >'.$reciever_name.'</strong> ('.$email.'),</p><br>
		'.$address.'
		<p>
			Trust this mail meets you well.<br> 
			We want to congratulate you for signing up on Compeer Medical Institute.<br>
			Your registration ID is:<strong>'.$student_id.'</strong>
		</p>
		<p>Dear '.$reciever_name.', kindly login to continue and complete your application. For more details, kindly contact us on <strong>info@compeermedicalinstitute.com</strong> or <strong>+234-802-3358-800</strong> Thank You.</p>
		<p>
			<strong>Compeer Medical Institute Management.</strong><br> 
			Mail Sent '.$currentDate.'.
		</p>
	</div>
	<div  style="min-height:30px;background:#333;text-align:left;color:#FFF;line-height:20px; padding:20px 10px 20px 50px;">
	&copy; All Right Reserve.
	</div>
</div>
';


$send_to=$email;
$subject="SignUp Acknowledgement";

$mail->AddAddress($send_to, $reciever_name);
$mail->addAddress('afootechglobal@gmail.com', 'AfooTECH Global');// Name is optional
$mail->addReplyTo($smtp_username, $sender_name); // reply to the sender email

$mail->Subject = $subject;
$mail->addEmbeddedImage('mail/img/sign_up_header_pix.jpg', 'sign_up_header_pix');
$mail->Body = $message;
$mail->AltBody = strip_tags($message);

if(!$mail->send()){
	echo 'Not Working';
}
}
?>












