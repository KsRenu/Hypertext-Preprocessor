<?php
// Start with PHPMailer class
use PHPMailer\PHPMailer\PHPMailer;
require_once './vendor/autoload.php';
// create a new object
$mail = new PHPMailer();
// configure an SMTP
$mail->isSMTP();
$mail->Host = 'smtp.mailtrap.io';
$mail->SMTPAuth = true;
$mail->Username = '7e114bbff0574d';
$mail->Password = 'd4ce9d90ba9604';
$mail->SMTPSecure = 'tls';
$mail->Port = 2525;

$mail->setFrom('20bcs015@gmail.com');
$mail->addAddress('renuks0802@gmail.com');
$mail->Subject = 'Testing the mail';
// Set HTML
$mail->isHTML(TRUE);
$mail->Body = '<html>Hi there, we are happy to <br> have you here.</br> Please check the document in the attachment.</html>';
$mail->AltBody = 'Hi there, we are happy to have you here. Please check the document in the attachment.';
// add attachment
$mail->addAttachment('Downloads\Contest_1');
// send the message
if(!$mail->send()){
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}