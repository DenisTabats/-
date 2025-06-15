<?php
include "../functions.php";
deleteClientsDiscountsInfo($_GET['id']);
header("Location: ../clientsDiscounts.php");
?>
