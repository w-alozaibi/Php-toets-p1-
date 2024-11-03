<?php


$hour = date('G');

if ($hour >= 6 && $hour < 12) {
    echo "Het is ochtend.<br>" ;
} elseif ($hour >= 12 && $hour < 18) {
    echo "Het is middag.<br>";
} elseif ($hour >= 18 && $hour < 24) {
    echo "Het is avond.<br>";
} else {
    echo "Het is nacht.<br>";
}

?>
