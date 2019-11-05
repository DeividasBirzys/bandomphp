<?php
$months = 12;
$wallet = 1000;
$month_income = 700;

for ($i = 0; $i < $months; $i++) {
    $month_expenses = rand(100, 500);
    $wallet += $month_income - $month_expenses;
}

$h1 = 'Wallet forecast';
$h2 = "Po $months m., prognozuojamas likutis: $wallet";
?>
<html>
    <body>
        <h1><?php print $h1; ?> </h1>
        <h2><?php print $h2; ?></h2>
    </body>
</html>