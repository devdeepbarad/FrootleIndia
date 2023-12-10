<?php

//error_reporting(E_ALL);
error_reporting(E_STRICT);

date_default_timezone_set('Asia/Calcutta');

require_once('class.phpmailer.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail             = new PHPMailer();

$body             = "Dreem India Email Testing";
//$body             = eregi_replace("[\]",'',$body);

$mail->IsSMTP(); // telling the class to use SMTP
$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
include_once("mail_config.php");

$mail->SetFrom('dhaval@frootle.in', 'Dreem India');

$mail->AddReplyTo('dhaval@frootle.in', 'Dreem India');

$mail->Subject    = "Email Testing";

//$mail->AltBody    = "testing email from Current Server"; // optional, comment out and test

$mail->MsgHTML($body);

$mail->AddAddress("devdeepbarad@gmail.com", "Devdeep Barad");

//$mail->addAttachment('images/1.png');



if(!$mail->Send()) {
 
} else {
  echo "Message sent!";
}

?>


