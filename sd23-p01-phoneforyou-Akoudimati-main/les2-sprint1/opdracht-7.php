
<?php


$iphoneCost = 1000;
$spaargeld = 800;

$verschil = $spaargeld - $iphoneCost;

if ($verschil >= 0) {

    echo "Je hebt genoeg spaargeld om de iPhone te kopen. Je hebt nog €" . $verschil ;
} elseif ($verschil < 0 && ($verschil) <= 250) {

    echo "Het lukt bijna, maar je komt nog €" . ($verschil) . " te kort.";
} else {

    echo "Je komt €" .($verschil) ;
}

?>
















