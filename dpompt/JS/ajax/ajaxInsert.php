<?php
    include_once ('../../dataBaseConnection.php');

    $newIdPhone = addNewPhoneListener($link, $_POST['phone']);
    $newIdDocument = addNewDocument($link, $_POST['seriesListner'], $_POST['numberListner'], $_POST['dateIssueListner'], $_POST['addressIssueListner']);
    $newIdListner = addNewListener($link, $_POST['surname'], $_POST["name"], $_POST["patronymic"], $_POST["dateBirth"], $_POST["email"], $_POST["password"],  $newIdPhone, $newIdDocument);
    addNewEducationListner($link, $_POST['typeEducation'], $_POST['numberEducationDocument'], $_POST['nameEstablishment'], $newIdListner);
    if ((!empty($_POST['seriesRepresent']))  && (!empty($_POST['numberRepresent'])) && (!empty($_POST['dateIssueRepresent']) && (!empty($_POST['addressIssueRepresent'])))){
        secondDocument($link, $_POST['seriesRepresent'], $_POST['numberRepresent'], $_POST['dateIssueRepresent'], $_POST['addressIssueRepresent'],$newIdListner);
    }

    function addNewPhoneListener($mirrorLink, $numberPhone)
    {
        $queryAddPhone = "INSERT INTO phone (`phone_number`) VALUES ('$numberPhone')";
        mysqli_query($mirrorLink, $queryAddPhone) or die(mysqli_error($mirrorLink));
        $querySelect = "SELECT Id_Phone FROM phone WHERE Id_Phone = (SELECT MAX(Id_Phone) FROM phone)";
        $resultSelect = mysqli_query($mirrorLink, $querySelect) or die(mysqli_error($mirrorLink));
        for($dataSelect = []; $item = mysqli_fetch_assoc($resultSelect); $dataSelect[] = $item);
        foreach($dataSelect as $element){ $mirrorSelectIdPhone = $element['Id_Phone']; }
        echo("New id_Phone -> $mirrorSelectIdPhone"."\n");
        return $mirrorSelectIdPhone;
    }

    function addNewDocument($mirrorLink, $series, $number, $dataIssue, $issueAddress)
    {
        $queryAddDocument = "INSERT INTO document (`series`,`number`,`date_issue`,`issuing_address`,`type`)
        VALUES ('$series','$number','$dataIssue', '$issueAddress', 'Слушатель')";
        mysqli_query($mirrorLink,$queryAddDocument) or die(mysqli_error($mirrorLink));
        $querySelect = "SELECT id_Document FROM document WHERE id_Document = (SELECT MAX(id_Document) FROM document)";
        $resultSelect = mysqli_query($mirrorLink, $querySelect) or die(mysqli_error($mirrorLink));
        for ($dataSelect = []; $item = mysqli_fetch_assoc($resultSelect); $dataSelect[] = $item);
        foreach ($dataSelect as $element){ $mirrorSelectIdDocument = $element['id_Document']; }
        echo("New id_Document -> $mirrorSelectIdDocument"."\n");
        return $mirrorSelectIdDocument;

    }

    function secondDocument($mirrorLink, $series, $number, $dataIssue, $issueAddress, $listner){
        $queryAddDocument = "INSERT INTO document (`series`,`number`,`date_issue`,`issuing_address`,`type`,`target`)
        VALUES ('$series','$number','$dataIssue', '$issueAddress', 'Предстовитель', '$listner')";
        mysqli_query($mirrorLink,$queryAddDocument) or die(mysqli_error($mirrorLink));
    }

    function addNewListener($mirrorLink, $surname, $name, $patronymic, $dataBirth, $email, $password, $idPhone, $idDocument)
    {
        $queryAddListner = "INSERT INTO `listener`(`surname`, `name`, `patronymic`, `date_birth`, `id_phone`, `id_document`, `email`, `password`) VALUES 
        ('$surname','$name','$patronymic','$dataBirth','$idPhone','$idDocument','$email','$password')";
        mysqli_query($mirrorLink, $queryAddListner) or die(mysqli_error($mirrorLink));
        $querySelect = "SELECT id_Listener FROM listener WHERE id_Listener = (SELECT MAX(id_Listener) FROM listener)";
        $resultSelect = mysqli_query($mirrorLink, $querySelect) or die(mysqli_error($mirrorLink));
        while ($resultSelect = mysqli_fetch_array($resultSelect)){ $mirrorSelectIdListner = $resultSelect['id_Listener']; }
        echo("New id_Listener -> $mirrorSelectIdListner"."\n");
        return $mirrorSelectIdListner;
    }

    function addNewEducationListner($mirrorLink, $type, $name, $establishment, $idListner)
    {
        $queryAddEducantion = "INSERT INTO education (`type_education`, `name_education`, `establishment`) VALUES ('$type','$name','$establishment')";
        mysqli_query($mirrorLink, $queryAddEducantion) or die(mysqli_error($mirrorLink));
        $querySelect = "SELECT id_Education FROM education WHERE id_Education = (SELECT MAX(id_Education) FROM education)";
        $resultSelect = mysqli_query($mirrorLink, $querySelect) or die(mysqli_error($mirrorLink));
        while ($resultSelect = mysqli_fetch_array($resultSelect)){ $mirrorSelecIdEducation = $resultSelect['id_Education']; }
        echo("New id_Education -> $mirrorSelecIdEducation"."\n");
        $queruJoinEducation = "INSERT INTO listener_and_education (`id_listener`,`id_education`) VALUES ('$idListner','$mirrorSelecIdEducation')";
       mysqli_query($mirrorLink, $queruJoinEducation);
    }  
?>