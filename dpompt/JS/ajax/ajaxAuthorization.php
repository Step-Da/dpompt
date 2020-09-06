<?php
    include_once ('../../dataBaseConnection.php');

    $inputLogin = $_POST['inputLogin'];
    $inputPassword = $_POST['inputPassword'];

    SelectDataListner($link, $inputLogin, $inputPassword);

    function SelectDataListner($mirroLink, $login, $password)
    {
        $querySelectData = "SELECT email, `password`, surname, name, patronymic FROM `listener` WHERE email = '$login' and password = '$password'";
        $resultSelectData = mysqli_query($mirroLink, $querySelectData);
        for($dataSelect = []; $item = mysqli_fetch_assoc($resultSelectData); $dataSelect[] = $item);
        foreach($dataSelect as $element){
            $outputLogin = $element['email'];
            $outputPassword = $element['password'];
            $_POST['autSurname'] = $element['surname'];
            $_POST['autName'] = $element['name'];
            $_POST['autPatronymic'] = $element['patronymic'];
        }
        if (($login == $outputLogin) && ($password == $outputPassword)){
            $target = $_POST['autSurname'].' '.$_POST['autName'].' '.$_POST['autPatronymic'];
            session_start();
            $_SESSION['lisener'] = $target;
            echo($_SESSION['lisener']);
        }
        else {
            $target = "empty";
            $_SESSION['lisner'] = $target;
            echo('Ссесия пуста'); 
        }
    }

    function printTag()
    {
        echo($_SESSION['lisner']);
    }
?>