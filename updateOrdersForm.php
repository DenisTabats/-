<?php
include "functions.php";
$id = $_GET['id'];
OpenDB();
$result = mysqli_query($link, "SELECT * FROM orders WHERE IDorder = $id");
$order = mysqli_fetch_assoc($result);
CloseDB();
if (!$order) {
    echo "Заказ не найден.";
    exit;
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Редактировать заказ</title>
</head>
<body>
    <h1>Редактировать заказ</h1>
    <form action="controller/updateOrdersController.php" method="post">
        <input type="hidden" name="id" value="<?php echo $order['IDorder']; ?>">

        <label for="IDclient">Код клиента:</label><br>
        <input type="number" id="IDclient" name="IDclient" value="<?php echo $order['IDclient']; ?>"><br><br>

        <label for="IDtrip">Код поездки:</label><br>
        <input type="number" id="IDtrip" name="IDtrip" value="<?php echo $order['IDtrip']; ?>"><br><br>

        <label for="dateOrder">Дата заказа:</label><br>
        <input type="date" id="dateOrder" name="dateOrder" value="<?php echo $order['dateOrder']; ?>"><br><br>

        <label for="insuranceAmount">Сумма страховки:</label><br>
        <input type="number" id="insuranceAmount" name="insuranceAmount" value="<?php echo $order['insuranceAmount']; ?>"><br><br>

        <label for="status">Статус:</label><br>
        <input type="text" id="status" name="status" value="<?php echo $order['status']; ?>"><br><br>

        <input type="submit" value="Обновить">
    </form>
</body>
</html>