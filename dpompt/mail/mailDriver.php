<?php 
    include_once ('../phpmailer/PHPMailerAutoload.php');

    
    $mail = new PHPMailer(true);                         
    $mail->isSMTP();
    $mail->CharSet = 'utf-8';          
    $mail->Host = 'smtp.mail.ru';
    $mail->Port = 465;   																							
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl'; 
    $mail->Username = 'dpomptmailbot@mail.ru'; 
    $mail->Password = '?432hfsd%%3re39'; 
    $mail->setFrom('dpomptmailbot@mail.ru'); 
    $mail->isHTML(true);                                 
?>
