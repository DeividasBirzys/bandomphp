<?php
$bin_vol = 40;
$bin_heap_vol = rand (5, 15);
$trash_per_day = 15;
$days = floor(($bin_vol + $bin_heap_vol) / $trash_per_day);
?>
<html>
    <head>
        <title>PHP</title>
    </head>
    <body>
        <h1>Siuksliu prognoze</h1>
        <p>Turima siuksline - <?php print $bin_vol;?> litru</p>
        <p>Zmona nieko nesako, kol kaupas nevirsija <?php print $bin_heap_vol;?> litru</p>
        <h3>Isvada: nieko nedarysiu <?php print $days;?> dienu</h3>
    </body>
</html>