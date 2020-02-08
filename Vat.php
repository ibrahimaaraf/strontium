<html>
<body>

<?php


$price=10000;
$vat=.15;
$calc_vat=$price * $vat;
$total_price= $price + $calc_vat;

echo "Vat is " . $vat *100 . "% of the price","<br>";




?>

</html>
</body>