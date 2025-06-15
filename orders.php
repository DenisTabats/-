<?php
include "functions.php";
$info=getOrdersInfo();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Заказы</title>
    </head>
    <body>
        <div>
            <table>
                <thead>
                    <th>Код заказа</th>
                    <th>Код клиента</th>
                    <th>Код поездки</th>
                    <th>Дата заказа</th>
                    <th>Сумма страховки</th>
                    <th>Статус</th>
                    <th>Редактировать</th>
                    <th>Удалить</th>
                </thead>
                <?php
                for($i=0; $i<count($info); $i++)
                {
                    $id=$info[$i]["IDorder"];
                    $IDclient=$info[$i]["IDclient"];
                    $IDtrip=$info[$i]["IDtrip"];
                    $dateOrder=$info[$i]["dateOrder"];
                    $insuranceAmount=$info[$i]["insuranceAmount"];
                    $status=$info[$i]["status"];
                    echo "<tr><td>$id</td><td>$IDclient</td><td>$IDtrip</td><td>$dateOrder</td><td>$insuranceAmount</td><td>$status</td><td><a href='updateOrdersForm.php?id=".$id."'>Редактировать</a></td><td><a href='controller/delOrdersController.php?id=$id'>Удалить</a></td></tr>";
                }
                ?>
            </table>
            <button type="submit" name="add"><a href="addOrders.php">Добавить</a></button>
        </div>
    </body>
</html>