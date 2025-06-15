<?php
include "../functions.php";
addClientsDiscountsInfo($_POST['IDclient'], $_POST['IDspecialDiscount'], $_POST['dateOfUse']);
header("Location: ../clientsDiscounts.php");
?>
