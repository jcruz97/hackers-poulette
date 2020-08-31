<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require __DIR__ . '/vendor/PHPMailer-6.1.7/src/Exception.php';
require __DIR__ . '/vendor/PHPMailer-6.1.7/src/PHPMailer.php';
require __DIR__ . '/vendor/PHPMailer-6.1.7/src/SMTP.php';

$mail = new PHPMailer();

//SMTP settings for Mailtrap
$mail->isSMTP(1);
$mail->Host = 'smtp.mailtrap.io';
$mail->SMTPAuth = true;
$mail->Username = '1acfd95c78073d';
$mail->Password = '4610a04d858f51';
$mail->SMTPSecure = 'tls';
$mail->Port = 2525;

//Actual content of the mail
$mail->setFrom('info@mailtrap.io', 'Mailtrap');
$mail->addReplyTo('info@mailtrap.io', 'Mailtrap');
$mail->addAddress('recipient1@mailtrap.io', 'Tim'); 
$mail->Subject = 'Test Email via Mailtrap SMTP using PHPMailer';
$mail->isHTML(true);
$mailContent = "<h1>Send HTML Email using SMTP in PHP</h1>
    <p>This is a test email I’m sending using SMTP mail server with PHPMailer.</p>";
$mail->Body = $mailContent;

if($mail->send()){
    echo "Thank you for your message!" . "<a href='https://www.youtube.com/watch?v=dQw4w9WgXcQ' class='text-center' style='texte-decoration:none;color:#0d8187'> Return Home</a>";
}else{
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}

?>