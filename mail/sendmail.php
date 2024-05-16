<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

// SMTP configuration
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com'; 
$mail->SMTPAuth = true;
$mail->Username = 'silvansowino1@gmail.com';
$mail->Password = 'grthmlmwzwnjexfe'; 
$mail->SMTPSecure = 'tls'; 
$mail->Port = 587; 

// Email content
$mail->setFrom($_POST['email'], $_POST['username']);
$mail->addAddress('oss@omilstaffingservices.com', 'Recipient Name'); 
$mail->Subject = $_POST['subject']; 
$mail->Body = $_POST['message'];

// Send email
if ($mail->send()) {
    echo 'Message has been sent';
} else {
    echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
}
?>
