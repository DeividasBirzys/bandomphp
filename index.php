<?php
$days = 365;
$pack_price = 3.50;
$count_ttl = 0;

for ($i = 0; $i < $days; $i++) {
    $day_of_week = date('N', strtotime('+' . $i . 'day'));

    if ($day_of_week == 7) {
        $cigs_sun = rand(1, 3);
        $count_ttl += $cigs_sun;
    } else if ($day_of_week == 6) {
        $cigs_sat = rand(10, 20);
        $count_ttl += $cigs_sat;
    } else {
        $cigs_mon_fri = rand(3, 4);
        $count_ttl += $cigs_mon_fri;
    }
}

$price_ttl = ceil($count_ttl / 20) * $pack_price;

$h1 = 'Mano dumu skaiciuokle';
$h2 = "Per $days dienas, surukysiu $count_ttl cigareciu uz $price_ttl";
?>
<html>
    <body>
        <h1><?php print $h1; ?> </h1>
        <h2><?php print $h2; ?></h2>
    </body>
</html>