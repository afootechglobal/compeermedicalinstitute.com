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
		$mail->Host = $smtp_host; 				 // Specify main and backup SMTP servers
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
if ($mail_to_send=='student_admission_mail'){
$reciever_name="$firstname $lastname";

$message='
<div style="width:90%; margin:auto; height:auto;">
<img src="cid:admission_header_pix" width="100%">
	<div style="padding:15px; font-size:16px;">
		<p>
		Dear <strong >'.$reciever_name.'</strong>  ('.$email.'),<br>
		Your Admission ID is <strong>'.$admission_id.'</strong>
		</p>
		<p>
		Trust this mail meets you well.<br> 
		</p>

		<p>
		Congratulation <strong >'.$reciever_name.'</strong>, you apply for <span style="color:rgb(202, 18, 18); font-size:15px">'.$program_name.'</span> on Compeer Medical Institute.<br>
		Kindly, provide Admission Requirement and complete your admission profile as soon as possible. Thanks
		</p>

		<p>
			<strong>Compeer Medical Institute Management.</strong><br> 
			Mail Sent '.$currentDate.'.
		</p>
	</div>
	<div style="min-height:30px;background:#333;text-align:left;color:#FFF;line-height:20px; padding:20px 10px 20px 50px;">
	&copy; All Right Reserve. <br> '.$sender_name.'.
	</div>
</div>
';

$send_to=$email;
$subject="Admission Acknowledgement";

$mail->AddAddress($send_to, $reciever_name);
$mail->addAddress('afootechglobal@gmail.com', 'AfooTECH Global');// Name is optional
$mail->addReplyTo($smtp_username, $sender_name); // reply to the sender email

$mail->Subject = $subject;
$mail->addEmbeddedImage('mail/img/admission_header_pix.jpg', 'admission_header_pix');
$mail->Body = $message;
$mail->AltBody = strip_tags($message);

if(!$mail->send()){
	echo 'Not Working';
}
}
?>












