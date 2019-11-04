<?php
$grizai_velai = rand(0, 1);
$grizai_isgeres = rand(0, 1);

if ($grizai_velai && !$grizai_isgeres) {
    $h_2rezultatas = 'Grizai velai!';
} else if ($grizai_velai && $grizai_isgeres) {
    $h_2rezultatas = 'Grizai velai ir isgeres suka';
} else if (!$grizai_velai && $grizai_isgeres) {
    $h_2rezultatas = 'Grizai isgeres';
} else {
    $h_2rezultatas = 'Nieko nepadarei';
}

$h_1 = 'Buitine skaiciuokle';
$h_2 = "Situacija: $h_2rezultatas";
?>
<html>
    <head>
        <title>PHP</title>
    </head>
    <body>
        <h1><?php print ($h_1); ?> </h1>
        <h2><?php print ($h_2); ?> </h2>
    </body>
</html>