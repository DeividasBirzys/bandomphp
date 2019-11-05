<?php
$months = 12;
$wallet = 1000;
$month_income = 700;

for ($i = 0; $i < $months; $i++) {
    $month_expenses = rand(500, 1000);
    $wallet += $month_income - $month_expenses;
    $h2 = "Po $months m., prognozuojamas likutis: $wallet";
    if($wallet <= -1){
        $h2 = "Atsargiai, po $i menesi gali baigtis pinigai";
        break;
    }
}
$h1 = 'Wallet forecast';
?>
<html>
    <body>
        <h1><?php print $h1; ?> </h1>
        <h2><?php print $h2; ?></h2>
    </body>
</html>