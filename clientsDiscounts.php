<?php
include "functions.php";
$info=getClientsDiscountsInfo();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Скидки клиентов</title>
    </head>
    <body>
        <div>
            <table>
                <thead>
                    <th>Код скидки</th>
                    <th>Код клиента</th>
                    <th>Код специальной скидки</th>
                    <th>Дата использования</th>
                    <th>Редактировать</th>
                    <th>Удалить</th>
                </thead>
                <?php
                for($i=0; $i<count($info); $i++)
                {
                    $id=$info[$i]["IDdiscount"];
                    $IDclient=$info[$i]["IDclient"];
                    $IDspecialDiscount=$info[$i]["IDspecialDiscount"];
                    $dateOfUse=$info[$i]["dateOfUse"];
                    echo "<tr><td>$id</td><td>$IDclient</td><td>$IDspecialDiscount</td><td>$dateOfUse</td><td><a href='updateClientsDiscountsForm.php?id=".$id."'>Редактировать</a></td><td><a href='controller/delClientsDiscountsController.php?id=$id'>Удалить</a></td></tr>";
                }
                ?>
            </table>
            <button type="submit" name="add"><a href="addClientsDiscounts.php">Добавить</a></button>
        </div>
    </body>
</html>