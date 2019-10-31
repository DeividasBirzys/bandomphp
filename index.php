<?php
$bin_vol = 40;
$bin_heap_vol = rand (5, 15);
$trash_per_day = 15;
$days = floor(($bin_vol + $bin_heap_vol) / $trash_per_day);
$Turima_siuksline = "Turima siuksline - $bin_vol litru";
$Zmona_nesko = "Zmona nieko nesako, kol kaupas nevirsija $bin_heap_vol litru";
$Isvada = "Isvada: nieko nedarysiu $days dienu";
?>
<html>
    <head>
        <title>PHP</title>
    </head>
    <body>
        <h1>Siuksliu prognoze</h1>
        <p><?php print $Turima_siuksline;?></p>
        <p><?php print $Zmona_nesko;?></p>
        <h3><?php print $Isvada;?></h3>
    </body>
</html>