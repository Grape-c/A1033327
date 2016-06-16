

<?php

mb_internal_encoding('UTF-8');
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

if(@$_POST['nickname']!=''){
$nickname=$_POST['nickname'];
$email=$_POST['email'];
$sub=$_POST['subject'];
$content=$_POST['content'];

$mail->isSMTP();                                      // Set mailer to use SMTP


$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = ("$email");                 // SMTP username
$mail->Password = 'sal55960310';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; 

$mail->isHTML(true);                                  // Set email format to HTML

$mail->setFrom("$email", 'Mailer');
$mail->addAddress("php@nuk.im");     // Add a recipient
$mail->Subject =mb_encode_mimeheader("$sub",'UTF-8');
//$mail->Subject("utf-8") ;

$mail->Body    = "$content";

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

}


?>