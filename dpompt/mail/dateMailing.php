<?php
    include_once ("../mail/mailDriver.php");
    include_once ("../dataBaseConnection.php");
    
    $date = $_POST['date'];

    selectEmailAddress($link, $mail, $date);

    function selectEmailAddress($mirroLink, $mail, $date){
        //$date = date('Y-m-d');
        $querySelectCourse = "SELECT `id_Courses`, `name_courses` FROM `courses` WHERE `start_date` = '$date'";
        $resultCourse = mysqli_query($mirroLink, $querySelectCourse);
        while ($resultSelect = mysqli_fetch_array($resultCourse)){ 
            $mirrorId = $resultSelect['id_Courses'];
            $nameCourse = $resultSelect['name_courses'];
            $querySelectUser = "SELECT CONCAT(`surname`,' ',`name`,' ',`patronymic`) as user, `email` FROM `mailcatalog` WHERE id_courses = '$mirrorId'";
            $resultUser = mysqli_query($mirroLink, $querySelectUser);
            for ($dataSelect = []; $item = mysqli_fetch_assoc($resultUser); $dataSelect[] = $item);
            foreach ($dataSelect as $element){
                $user = $element['user']; 
                $email = $element['email'];
                sendMail($mail, $email, $user, $nameCourse);
            }
        }
    }

    function sendMail($mail, $email, $user, $course){
        try{
            $mail->addAddress($email);
            $mail->Subject = 'Напоминаение о начале образовательного курса УЦ ДПО МПТ';
            $mail->Body= "Здравствуйте,".$user." Сегодня начнется крус".'"'.$course.'"';      
            $mail->send();
            echo("Письмо отправленно");
        }
        catch (phpmailerException $exception) {
            echo $exception->errorMessage();
        }
    }
?>