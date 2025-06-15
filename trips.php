<?php
include "functions.php";
$info=getTripsInfo();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Поездки</title>
    </head>
    <body>
        <div>
            <table>
                <thead>
                    <th>Код поездки</th>
                    <th>Код тура</th>
                    <th>Дата начала</th>
                    <th>Маршрут</th>
                </thead>
                <?php
                for($i=0; $i<count($info); $i++)
                {
                    $id=$info[$i]["IDtrip"];
                    $IDtour=$info[$i]["IDtour"];
                    $startDate=$info[$i]["startDate"];
                    $route=$info[$i]["route"];
                    echo "<tr><td>$id</td><td>$IDtour</td><td>$startDate</td><td>$route</td></tr>";
                }
                ?>
            </table>
        </div>
    </body>
</html>