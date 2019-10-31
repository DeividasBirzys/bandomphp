<?php
$Paskola = (rand(1, 100));
$Grazinimas1 = (rand(101, 200));
$Grazinimas2 = (rand(201, 300));
$h2 = "Jei paemei $Paskola jievru";
$h3 = "Su dviem kabanciais grazinsi $Grazinimas1";
$h4 = "Su vienu kabanciu grazinsi $Grazinimas2";
?>
<html>
    <head>
        <title>PHP</title>
    </head>
    <body>
        <h1>Skolos skaiciukle</h1>
        <h2><?php print $h2; ?></h2>
        <h3><?php print $h3; ?></h3>
        <h4><?php print $h4; ?></h4>
    </body>
</html>