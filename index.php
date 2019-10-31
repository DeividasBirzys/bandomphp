<?php
$distance = rand(50, 100);
$consumption = 7.5;
$price_l = 1.3;
$price_trip = round(($distance * ($consumption / 100)) * $price_l, 2);
$fuel_total = round(($consumption / 100) * $distance, 2);
$h_1 = 'Keliones skaiciuokle';
$li_1 = "Nuvaziuota distancija: $distance";
$li_2 = "Sunaudota $fuel_total l. kuro";
$li_3 = "Kaina: $price_trip pinigeliu";
?>
<html>
    <head>
        <title>PHP</title>
    </head>
    <body>
        <h1><?php print $h_1; ?></h1>
        <ul>
            <li><?php print $li_1; ?></li>
            <li><?php print $li_2; ?></li>
            <li><?php print $li_3; ?></li>
        </ul>
    </body>
</html>