<?php
include "../functions.php";
addOrdersInfo($_POST['IDclient'], $_POST['IDtrip'], $_POST['dateOrder'], $_POST['insuranceAmount'], $_POST['status']);
header("Location: ../orders.php");
?>