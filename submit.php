<?php
$usrname=$_POST["usrname"];
$email=$_POST["email"];
$prodname=$_POST["prodname"];
require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
// $mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'ulagacr7@gmail.com';                 // SMTP username
$mail->Password = 'Wellisall@7';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('ulagacr7@gmail.com', 'Siemens Kalwa Lab');
$mail->addAddress($email);     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'New Order Confirmed';
$mail->Body    = 'Dear ' .$usrname. ',<br> Your new test order for the product <b>' .$prodname.'</b> is confirmed.';
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else{
    session_start();
$_SESSION["message"]="order submitted";
header("location:home.php");
}
?>