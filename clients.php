<?php
include "functions.php";
$info=getClientsInfo();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Клиенты</title>
    </head>
    <body>
        <div>
            <table>
                <thead>
                    <th>Код клиента</th>
                    <th>ФИО</th>
                    <th>Паспортные данные</th>
                    <th>Загранпаспорт</th>
                    <th>Статус визы</th>
                    <th>Данные визы</th>
                    <th>Редактировать</th>
                    <th>Удалить</th>
                </thead>
                <?php
                for($i=0; $i<count($info); $i++)
                {
                    $id=$info[$i]["IDclient"];
                    $FIO=$info[$i]["FIO"];
                    $passportData=$info[$i]["passportData"];
                    $interPassportData=$info[$i]["interPassportData"];
                    $statusVisa=$info[$i]["statusVisa"];
                    $visaData=$info[$i]["visaData"];
                    echo "<tr><td>$id</td><td>$FIO</td><td>$passportData</td><td>$interPassportData</td><td>$statusVisa</td><td>$visaData</td><td><a href='updateClientsForm.php?id=".$id."'>Редактировать</a></td><td><a href='controller/delClientsController.php?id=$id'>Удалить</a></td></tr>";
                }
                ?>
            </table>
            <button type="submit" name="add"><a href="addClients.php">Добавить</a></button>
        </div>
    </body>
</html>