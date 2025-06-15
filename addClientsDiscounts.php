<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавить скидку клиенту</title>
</head>
<body>
    <h1>Добавить скидку клиенту</h1>
    <form action="controller/addClientsDiscountsController.php" method="post">
        <label for="IDclient">Код клиента:</label><br>
        <input type="int" id="IDclient" name="IDclient"><br><br>

        <label for="IDspecialDiscount">Код специальной скидки:</label><br>
        <input type="int" id="IDspecialDiscount" name="IDspecialDiscount"><br><br>

        <label for="dateOfUse">Дата использования:</label><br>
        <input type="date" id="dateOfUse" name="dateOfUse"><br><br>

        <input type="submit" value="Добавить">
    </form>
</body>
</html>