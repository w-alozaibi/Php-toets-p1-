<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Combined Example</title>
</head>
<body>
<?php
echo " 1- het is vandaag :" . date("l d F y") . ".<br>";

$day_of_year = date("z") + 1;
echo " 2- vandaag is het de " .
    $day_of_year . "e dag van het jaar . <br>";


$day_of_week = date("n");
echo "3- wednsday is de  " .
    $day_of_week .  "e  dag van de week " . "<br>";


// Check the number of days in March
$days_in_march = cal_days_in_month(CAL_GREGORIAN, 3, date("Y"));
echo "De maand March heeft in totaal " . $days_in_march . " dagen.<br>";

$year = date("Y");
if ((($year % 4 == 0) && ($year % 100 != 0)) || ($year % 400 == 0)) {
    echo "Het jaar " . $year . " is een schrikkeljaar.<br>";
} else {
    echo "Het jaar " . $year . " is geen schrikkeljaar.<br>";
}

?>
</body>
</html><?php