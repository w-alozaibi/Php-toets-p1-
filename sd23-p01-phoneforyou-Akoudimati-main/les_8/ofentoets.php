<?php
$malding = "kies een product man";

$errors = [];
$inputs = [];

if (isset($_POST['send'])) {

    $product = filter_input(INPUT_POST, 'product', FILTER_VALIDATE_INT);
    if ($product === false || $product === null) {
        $errors['product'] = 'Kies een product man';
    } else {
        $inputs['product'] = $product;
    }

    $amount = filter_input(INPUT_POST, 'amount', FILTER_VALIDATE_INT);
    if ($amount === false || $amount <= 0) {
        $errors['amount'] = 'Kies een geldig getal';
    } else {
        $inputs['amount'] = $amount;
    }

    if (empty($errors)) {

        switch ($product) {
            case 1: // Handdoek
                $price = 20; //de price heb ik van mij zelf gegeven
                $discount = 0.20;
                $productName = 'handdoeken';
                break;
            case 2: // Broek
                $price = 17;
                $discount = 0.30;
                $productName = 'broeken';
                break;
            case 3: // Shirt
                $price = 10;
                $discount = 0.50;
                $productName = 'shirts';
                break;
            default:
                $errors['product'] = 'Ongeldig product.';
        }

        if (empty($errors['product'])) {
            $totalPrice = $amount * $price * (1 - $discount);
            $formattedPrice = number_format($totalPrice, 2);


            echo "<p>Totale prijs van de $amount $productName: €$formattedPrice</p>";
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Stapelkorting</title>
</head>
<body>
<h2>Stapelkorting</h2>
<form action="" method="post">
    <p>Welk product wordt gekocht?</p>
    <input type="radio" name="product" value="1"> Handdoek<br>
    <input type="radio" name="product" value="2"> Broek<br>
    <input type="radio" name="product" value="3"> Shirt<br>
    <br>
    <label for="amount">Amount:</label>
    <input type="text" name="amount" id="amount">
    <br><br>
    <input type="submit" name="send" value="Uitrekenen">
</form>



<?php
if (!empty($errors)) {
echo "<p>Er zijn fouten opgetreden:</p><ul>";
    foreach ($errors as $field => $error) {
    echo "<li>" . htmlspecialchars($error) . "</li>";
    }
    echo "</ul>";
} ?>


<br> <button onclick="window.location.href='../les_8/ofentoets.php';">try again</button>

</body>
</html>
