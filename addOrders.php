<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавить заказ</title>
</head>
<body>
    <h1>Добавить заказ</h1>
    <form action="controller/addOrdersController.php" method="post">
        <label for="IDclient">Код клиента:</label><br>
        <input type="int" id="IDclient" name="IDclient"><br><br>

        <label for="IDtrip">Код поездки:</label><br>
        <input type="int" id="IDtrip" name="IDtrip"><br><br>

        <label for="dateOrder">Дата заказа:</label><br>
        <input type="date" id="dateOrder" name="dateOrder"><br><br>

        <label for="insuranceAmount">Сумма страховки:</label><br>
        <input type="int" id="insuranceAmount" name="insuranceAmount"><br><br>

        <label for="status">Статус:</label><br>
        <input type="text" id="status" name="status"><br><br>

        <input type="submit" value="Добавить">
    </form>
</body>
</html>