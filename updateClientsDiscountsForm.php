<?php
include "functions.php";
$id = $_GET['id'];
OpenDB();
$result = mysqli_query($link, "SELECT * FROM clientsDiscounts WHERE IDdiscount = $id");
$clientsDiscount = mysqli_fetch_assoc($result);
CloseDB();

if (!$clientsDiscount) {
    echo "Скидка клиента не найдена.";
    exit;
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Редактировать скидку клиента</title>
</head>
<body>
    <h1>Редактировать скидку клиента</h1>
    <form action="controller/updateClientsDiscountsController.php" method="post">
        <input type="hidden" name="id" value="<?php echo $clientsDiscount['IDdiscount']; ?>">

        <label for="IDclient">Код клиента:</label><br>
        <input type="number" id="IDclient" name="IDclient" value="<?php echo $clientsDiscount['IDclient']; ?>"><br><br>

        <label for="IDspecialDiscount">Код специальной скидки:</label><br>
        <input type="number" id="IDspecialDiscount" name="IDspecialDiscount" value="<?php echo $clientsDiscount['IDspecialDiscount']; ?>"><br><br>

        <label for="dateOfUse">Дата использования:</label><br>
        <input type="date" id="dateOfUse" name="dateOfUse" value="<?php echo $clientsDiscount['dateOfUse']; ?>"><br><br>

        <input type="submit" value="Обновить">
    </form>
</body>
</html>