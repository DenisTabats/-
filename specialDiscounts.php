<?php
include "functions.php";
$info=getSpecialDiscountsInfo();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Специальные скидки</title>
    </head>
    <body>
        <div>
            <table>
                <thead>
                    <th>Код скидки</th>
                    <th>Сумма скидки</th>
                    <th>Условия скидки</th>
                </thead>
                <?php
                for($i=0; $i<count($info); $i++)
                {
                    $id=$info[$i]["IDspecialDiscount"];
                    $discountAmount=$info[$i]["discountAmount"];
                    $discountTerms=$info[$i]["discountTerms"];
                    echo "<tr><td>$id</td><td>$discountAmount</td><td>$discountTerms</td></tr>";
                }
                ?>
            </table>
        </div>
    </body>
</html>