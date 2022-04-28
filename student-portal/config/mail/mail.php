<?php
	 $array=$callclass->_get_student_admission_detail($conn, $admission_id);
	 $fetch = json_decode($array, true);

	 $admission_id=$fetch[0]['admission_id'];
	 $admission_status=$fetch[0]['admission_status'];
	 $firstname=$fetch[0]['firstname'];
	 $middlename=$fetch[0]['middlename'];
	 $lastname=$fetch[0]['lastname'];
	 $gender=$fetch[0]['gender'];
	 $dob=$fetch[0]['dob'];
	 $email=$fetch[0]['email'];
	 $phonenumber=$fetch[0]['phonenumber'];
	 $address=$fetch[0]['address'];
	 $year_program=$fetch[0]['year_program'];
	 $sat_or_act=$fetch[0]['sat_or_act'];
	 $country=$fetch[0]['country'];
	 $result=$fetch[0]['result'];
	 $essay=$fetch[0]['essay'];
	 $letter_one=$fetch[0]['letter_one'];
	 $letter_two=$fetch[0]['letter_two'];
	 $date=$fetch[0]['date'];
	 
 
	 
	 
	 
	 
	 
	 
	 
	 
	 
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
if ($mail_to_send=='send_admission_email'){

$reciever_name="$firstname $lastname";

$message='
<div style="width:90%; margin:auto; height:auto;">
<img src="cid:admission_header_pix" width="100%">
	<div style="padding:15px; font-size:16px;">
		<p>
		Dear <strong >'.$reciever_name.'</strong> ('.$email.'),</p><br>
		'.$address.'
		<p>
			Trust this mail meets you well.<br> 
			We want to congratulate you for applying admission  on Compeer Medical Institute.<br>
			Your admission ID is:<strong>'.$admission_id.'</strong>
		</p>
		<p>Dear '.$reciever_name.', kindly continue and complete your profile and apply the neccessary information. For more details, kindly contact us on <strong>info@compeermedicalinstitute.com</strong> or <strong>+234-802-3358-800</strong> Thank You.</p>
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












