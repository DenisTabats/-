<?php
include "../functions.php";
addClientsInfo($_POST['FIO'], $_POST['passportData'], $_POST['interPassportData'], $_POST['statusVisa'], $_POST['visaData']);
header("Location: ../clients.php");
?>