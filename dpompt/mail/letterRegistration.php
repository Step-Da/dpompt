<?php
    include_once ("../mail/mailDriver.php");
    try{
        $mail->addAddress($_POST['recipient']);
        $mail->Subject = 'Регистрация на сайте УЦ ДПО МПТ';
        $mail->Body= "Здравствуйте,".$_POST['recipientSurname'].' '.$_POST['recipientName'].". Вы зарегистрировались на сайте УЦ ДПО МПТ.". 
        "Теперь вам доступен каталог дополнительных образовательных курсов для повешения уровня профессиональной квалификации.";
        $mail->AltBody = "Спасибо, что выбрали наш веб-ресурс!";
        $mail->send();
        echo("Письмо отправленно");
    }
    catch (phpmailerException $exception) {
        echo $exception->errorMessage();
    }
?>