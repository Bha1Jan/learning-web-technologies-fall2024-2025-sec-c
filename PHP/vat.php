<?php
$amount = 100;


$vat_rate = 0.15;

$vat = $amount * $vat_rate;

$total_amount = $amount + $vat;

echo "Amount: TK " . number_format($amount, 2) . "<br>";
echo "VAT (15%): TK " . number_format($vat, 2) . "<br>";
echo "Total Amount (including VAT): TK " . number_format($total_amount, 2);
?>
