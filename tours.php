<?php
include "functions.php";
$info=getToursInfo();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Туры</title> 
    </head>
    <body> 
        <div>       
            <table>
                <thead><th>Код тура</th><th>Страна</th><th>Город</th><th>Назначение</th><th>Гостиница</th><th>Питание</th><th>Дата начала</th><th>Дата окончания</th><th>Транспорт</th><th>Стоимость</th></thead>
                <?php
                for($i=0; $i<count($info); $i++)
                {
                    $id=$info[$i]["IDtour"];
                    $country=$info[$i]["country"];
                    $city=$info[$i]["city"];
                    $purpose=$info[$i]["purpose"];
                    $hotel=$info[$i]["hotel"];
                    $food=$info[$i]["food"];
                    $startDate=$info[$i]["startDate"];
                    $endDate=$info[$i]["endDate"];
                    $transport=$info[$i]["transport"];
                    $cost=$info[$i]["cost"];
                    echo "<tr><td>$id</td><td>$country</td><td>$city</td><td>$purpose</td><td>$hotel</td><td>$food</td><td>$startDate</td><td>$endDate</td><td>$transport</td><td>$cost</td></tr>";
                }
                ?>
            </table>
        </div>
    </body>
</html>