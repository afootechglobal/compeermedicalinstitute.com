<?php
			  $array=$callclass->_get_backend_settings_detail($conn, 'BK_ID001');
			  $fetch = json_decode($array, true);
			  $smtp_host=$fetch[0]['smtp_host'];
			  $smtp_username=$fetch[0]['smtp_username'];
			  $smtp_password=$fetch[0]['smtp_password'];
			  $smtp_port=$fetch[0]['smtp_port'];
			  $sender_name=$fetch[0]['sender_name'];
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
		Dear <strong >'.$reciever_name.'</strong>,<br>
		 Email: ('.$email.'),<br>
		 Home Address: '.$address.'<br>
		 </p>
		
		<p>
			Trust this mail meets you well.<br> 
			We want to congratulate you for signing up on Compeer Medical Institute.<br>
			Your registration ID is:<strong style="color: hsla(0, 100%, 40%, 0.678);">'.$student_id.'</strong>
		</p>
		<p>Dear '.$reciever_name.', kindly login to continue and complete your application. For more details, kindly contact us on '.$smtp_username.' or +234-802-3358-800 Thank You.</p>
		<p>
			<strong>Compeer Medical Institute Management.</strong><br> 
			Mail Sent '.$currentDate.'.
		</p>
	</div>
	<div  style="min-height:30px;background:#333;text-align:left;color:#FFF;line-height:20px; padding:20px 10px 20px 50px;">
	&copy; All Right Reserve.<br>
	'. $sender_name.'
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












