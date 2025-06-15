<?php
include "../functions.php";
updateOrdersInfo($_POST['id'], $_POST['IDclient'], $_POST['IDtrip'], $_POST['dateOrder'], $_POST['insuranceAmount'], $_POST['status']);
header("Location: ../orders.php");
?>