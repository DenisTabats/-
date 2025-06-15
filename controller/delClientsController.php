<?php
include "../functions.php";
deleteClientsInfo($_GET['id']);
header("Location: ../clients.php");
?>