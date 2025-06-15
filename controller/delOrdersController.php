<?php
include "../functions.php";
deleteOrdersInfo( $_GET["id"]);
header("Location: ../orders.php");
?>