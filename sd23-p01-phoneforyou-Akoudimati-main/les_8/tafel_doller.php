<?php
$tafel = 3;

echo "De waarde van variabele \$tafel is $tafel<br>";


echo "Tafel van $tafel<br>";
$sum = 0;

for ($i = 1; $i <= 10; $i++) {
    $result = $i * $tafel;
    $sum += $result;
    echo "$i x $tafel = $result<br>";
}

echo "De uitkomst van alle vermenigvuldigingen is: $sum<br>";
?>