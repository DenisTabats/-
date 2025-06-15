<?php
include "../functions.php";
updateClientsDiscountsInfo($_POST['id'], $_POST['IDclient'], $_POST['IDspecialDiscount'], $_POST['dateOfUse']);
header("Location: ../clientsDiscounts.php");
?>