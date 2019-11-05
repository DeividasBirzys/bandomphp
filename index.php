<?php
$sunny = rand(0, 1);
$rainy = rand(0, 1);

if ($sunny && !$rainy) {
    $h1 = 'Sauleta';
    $class = 'bg-sunny';
}else if (!$sunny && $rainy){
    $h1 = 'Lietinga';
    $class = 'bg-rainy';
}else if ($sunny && $rainy) {
    $h1 = 'Debesuota su lietum';
    $class = 'bg-sunny_rainy';
}
?>
<html>
    <head>
        <style>
            .content {
                display: flex;
                flex-direction: row;
                align-items: center;
            }
            .bg-img {
                width: 300px;
                height: 300px;
                background-size: cover;
            }
            .bg-rainy {
                background-image: url("https://marshallslocuminn.com/wp-content/uploads/2015/09/creative-rain_01.jpg")
            }
            .bg-sunny {
                background-image: url("http://ipadflava.com/wp-content/uploads/Sun-280x280.jpg");
            }
            .bg-sunny_rainy {
                background-image: url("https://i.pinimg.com/originals/87/5e/8d/875e8d92f22ddc07d12a7506b4ea2780.jpg");
            }
        </style>
    </head>
    <body>
        <div class="content">
            <div class="bg-img <?php print $class; ?>"></div>
            <h1><?php print $h1; ?></h1>
        </div>
    </body>
</html>



