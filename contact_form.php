<?php 
$var=extract($_POST);

//echo $Email_ID;


//error_reporting(E_ALL);
error_reporting(E_STRICT);

date_default_timezone_set('Asia/Calcutta');

require_once('class.phpmailer.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded
$template = '<div style="padding:50px; color:#000;">Frootle India Contact Information details.<br/><br/>Name:'.$Name.'<br/>Email:'.$Email_ID.'<br/>Contact No:'.$Contact_No.'<br/>Company Name:'.$Company_Name.'<br/>Description:'.$Description.'<br/><br/>This is a Contact Information mail</div>';

$mail             = new PHPMailer();

//$body             = "Frootle India Contact Details";
//$body             = eregi_replace("[\]",'',$body);

$mail->IsSMTP(); // telling the class to use SMTP
$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
include_once("mail_config.php");

$mail->SetFrom('dhaval@frootle.in', 'Frootle India');

$mail->AddReplyTo('dhaval@frootle.in', 'Frootle India');

$mail->Subject    = "Frootle India Contact Details";

//$mail->AltBody    = "testing email from Current Server"; // optional, comment out and test

$mail->MsgHTML($template);
$mail->AddAddress("dhaval@frootle.in", "Dhavel Panchal");
$mail->AddAddress("rahul@frootle.in", "Rahul");
$mail->AddAddress("neha@frootle.in", "Neha");

//$mail->addAttachment('images/1.png');



if(!$mail->Send()) {
 
} else {
  echo "Success";
}





?>