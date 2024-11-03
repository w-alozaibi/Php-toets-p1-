<?php

$prijs = 50;

if ($prijs < 55) {
    echo "Oude prijs: € $prijs. Na verhoging van 11% is de prijs: € " . ($prijs * 1.11);
}

if ($prijs >= 55 && $prijs <= 150) {
    echo "Oude prijs: € $prijs. Na verhoging van 16% is de prijs: € " . ($prijs * 1.16);
}

if ($prijs > 150) {
    echo "Oude prijs: € $prijs. Na verhoging van 19% is de prijs: € " . ($prijs * 1.19);
}
?>
