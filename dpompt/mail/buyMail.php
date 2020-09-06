<?php
    include_once ("../mail/mailDriver.php");
    include_once ("../dataBaseConnection.php");

    $user = $_POST['user'];
    $event = $_POST['curse'];

    selectUser($link, $user);
    selectCourse($link, $event);
    addListnerToCours($link, $_POST['mirrorId'],  $_POST['id_Courses']);
    sendMail($mail);

    function selectUser($mirrorLink,$nameUser){
        $querySelect = "SELECT `id_Listener`, `email` FROM `listener` WHERE CONCAT(`surname`, ' ',`name`, ' ',`patronymic`) = '$nameUser'";
        $resultSelect = mysqli_query($mirrorLink,$querySelect);
        for($dataSelect = []; $item = mysqli_fetch_assoc($resultSelect); $dataSelect[] = $item);
        foreach($dataSelect as $element){ 
            $_POST['mirrorEmail'] = $element['email'];
            $_POST['mirrorId'] = $element['id_Listener']; 
        }
    }

    function selectCourse($mirrorLink, $nameCourses)
    {
        $querySelect = "SELECT `id_Courses`,`start_date`, `end_date` FROM `courses` WHERE `name_courses` = '$nameCourses'";
        $resultSelect = mysqli_query($mirrorLink,$querySelect);
        for($dataSelect = []; $item = mysqli_fetch_assoc($resultSelect); $dataSelect[] = $item);
        foreach($dataSelect as $element){
            $_POST['startDate'] = $element['start_date'];
            $_POST['endDate'] = $element['end_date'];
            $_POST['id_Courses'] = $element['id_Courses'];
        }

    }
    
    function addListnerToCours($mirrorLink, $idListner, $idCourse)
    {
        $queryAdd = "INSERT INTO `listener_and_courses`(`id_listener_courses`, `id_courses`) VALUES ('$idListner','$idCourse')";
        mysqli_query($mirrorLink,$queryAdd);
    }

    function sendMail($mail){
        try{
            $mail->addAddress($_POST['mirrorEmail']);
            $mail->Subject = 'Покупка образовательного курса УЦ ДПО МПТ';
            $mail->Body= "Здравствуйте,".$_POST['user']." Вы только что купили образовательный курс ".$_POST['curse']." который начнется "
            .$_POST['startDate']." и закончится ".$_POST['endDate'];        
            $mail->send();
            echo("Письмо отправленно");
        }
        catch (phpmailerException $exception) {
            echo $exception->errorMessage();
        }
    }
?>