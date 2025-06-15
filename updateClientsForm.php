<?php
include "functions.php";
$id = $_GET['id'];
OpenDB();
$result = mysqli_query($link, "SELECT * FROM clients WHERE IDclient = $id");
$client = mysqli_fetch_assoc($result);
CloseDB();
if (!$client) {
    echo "Клиент не найден.";
    exit;
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Редактировать клиента</title>
</head>
<body>
    <h1>Редактировать клиента</h1>
    <form action="controller/updateClientsController.php" method="post">
        <input type="hidden" name="id" value="<?php echo $client['IDclient']; ?>">

        <label for="FIO">ФИО:</label><br>
        <input type="text" id="FIO" name="FIO" value="<?php echo $client['FIO']; ?>"><br><br>

        <label for="passportData">Паспортные данные:</label><br>
        <input type="text" id="passportData" name="passportData" value="<?php echo $client['passportData']; ?>"><br><br>

        <label for="interPassportData">Загранпаспорт:</label><br>
        <input type="text" id="interPassportData" name="interPassportData" value="<?php echo $client['interPassportData']; ?>"><br><br>

        <label for="statusVisa">Статус визы:</label><br>
        <input type="text" id="statusVisa" name="statusVisa" value="<?php echo $client['statusVisa']; ?>"><br><br>

        <label for="visaData">Данные визы:</label><br>
        <input type="text" id="visaData" name="visaData" value="<?php echo $client['visaData']; ?>"><br><br>

        <input type="submit" value="Обновить">
    </form>
</body>
</html>