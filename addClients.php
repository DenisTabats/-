<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавить клиента</title>
</head>
<body>
    <h1>Добавить клиента</h1>
    <form action="controller/addClientsController.php" method="post">
        <label for="FIO">ФИО:</label><br>
        <input type="text" id="FIO" name="FIO"><br><br>

        <label for="passportData">Паспортные данные:</label><br>
        <input type="text" id="passportData" name="passportData"><br><br>

        <label for="interPassportData">Загранпаспорт:</label><br>
        <input type="text" id="interPassportData" name="interPassportData"><br><br>

        <label for="statusVisa">Статус визы:</label><br>
        <input type="text" id="statusVisa" name="statusVisa"><br><br>

        <label for="visaData">Данные визы:</label><br>
        <input type="text" id="visaData" name="visaData"><br><br>

        <input type="submit" value="Добавить">
    </form>
</body>
</html>