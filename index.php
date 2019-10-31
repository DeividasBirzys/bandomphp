<?php
$distance = rand(500, 2000);
$consumption = 7.5;
$price_l = 1.3;
$my_money = 100;

$price_trip = round(($distance * ($consumption / 100)) * $price_l, 2);
$fuel_total = round(($consumption / 100) * $distance, 2);

if ($price_trip <= $my_money) {
    $ar_iperkamas = 'Iperkama!';
} else {
    $ar_iperkamas = 'Nixuja!';
}

$h_1 = 'Keliones skaiciuokle';
$li_1 = "Nuvaziuota distancija: $distance";
$li_2 = "Sunaudota $fuel_total l. kuro";
$li_3 = "Kaina: $price_trip pinigeliu";
$li_4 = "Turimi pinigai: $my_money";
$p = "Isvada: Kelione $ar_iperkamas";
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
            <li><?php print $li_4; ?> </li>
            <hr>
                <p><?php print $p; ?></p>
        </ul>
    </body>
</html>