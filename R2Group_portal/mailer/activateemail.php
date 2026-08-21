<?php
if(!isset($_SESSION)) 
{ 
  session_start(); 
} 
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'Dwinjay16@gmail.com';                 // SMTP username
$mail->Password = 'Aldwinjay16';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to
$to=$_SESSION['email'];
$mail->setFrom('www.Hicodes.epizy.com', 'Hicodes');
$mail->addAddress($to);     // Add a recipient

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Hicodes Account Confirmation Message';
$mail->Body = "
<body style='line-height:15px;background: linear-gradient(#aaadd7,#4f9e41);width: 70%;padding: 30px;'>
<h1 style='font-variant: all-petite-caps;text-align: center;font-size: 24px;font-family: inherit;color: black;text-shadow: 0px 3px 7px black;'>hiCODE: Activation</h1>
<h4 style='color:black;'>Your account has been created, you can login with the following 
credentials after you have activated your account by pressing the url below.</h4>
 
<p style='font-size: 17px;font-family: -webkit-body;'>Email: " .$_SESSION['email']."</p>
<p style='font-size: 17px;font-family: -webkit-body;'>Password:" .$_SESSION['password']."</p>

<h5 style='font-size: 13px;padding:10px;color:black;background:#ffffff63;border-radius:10px;border: 1px solid #3b13b4ad;'>Please click this link below to activate your account:</h5><br>
http://localhost/LEarning%20site/verify.php?email=".$_SESSION['email']."&activation_code=".$_SESSION['activation_code']." "; // Our message above including the link

$mail->send();

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} 
?>




