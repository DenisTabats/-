<?php
include "../functions.php";
updateClientsInfo($_POST['id'], $_POST['FIO'], $_POST['passportData'], $_POST['interPassportData'], $_POST['statusVisa'], $_POST['visaData']);
header("Location: ../clients.php");
?>