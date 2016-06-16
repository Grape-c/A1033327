<html>
<head>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<form action=" " method="POST">
<title>自動發送E-mail</title>

</head>

<body>
<div class="mail">
    <div class="container">
        <b>聯絡我</b>
        
    <form id="msg" name="msg" method="post" action="">
      <div class="form-group">
        <b>寄件人</b><br/>
        <input type="text" class="form-control" id="nickname" name="nickname" placeholder="EX:彭德馨">
      </div>
      <div class="form-group">
        <b>電子郵件信箱</b><br/>
        <input type="email" class="form-control" id="email" name="email" placeholder="EX:sal0310@ymail.com">
      </div>
      <div class="form-group">
        <b>信件主旨</b><br/>
        <input type="text" class="form-control" id="subject" name="subject" placeholder="PHP期末報到A1033327">
      </div>
      <div class="form-group">
        <b>信件內容</b><br/>
        <textarea class="form-control" id="content" name="content" rows="5"placeholder="A1033327,電腦IP:10.0.73.151, mac address:fe80::cd1c:173f:ccd4:e43d%11"></textarea>
      </div>
       <button type="submit" class="btn btn-default" >寄出</button>
     
    </form>
    </div>
</div>
</body>

</html>

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