<?php
// Database connection
$db = new PDO("mysql:host=localhost;dbname=les5_school", "root", "");

// Initialize errors and inputs arrays
$errors = [];
$inputs = [];

// Check if the form was submitted
if (isset($_POST['send'])) {
    // Sanitize and validate name
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $name = trim($name);
    if (empty($name)) {
        $errors['name'] = 'Name is required.';
    } else {
        $inputs['name'] = $name;
    }

    // Sanitize and validate review
    $review = filter_input(INPUT_POST, 'review', FILTER_SANITIZE_SPECIAL_CHARS);
    $review = trim($review);
    if (empty($review)) {
        $errors['review'] = 'Review is required.';
    } else {
        $inputs['review'] = $review;
    }

    // Check if terms are accepted
    $agree = filter_input(INPUT_POST, 'agree', FILTER_SANITIZE_SPECIAL_CHARS);
    if ($agree === null) {
        $errors['agree'] = 'You must accept the terms.';
    } else {
        $inputs['agree'] = $agree;
    }

    // If no errors, proceed with database insertion
    if (count($errors) === 0) {
        $sth = $db->prepare("INSERT INTO review_les7 (name, content) VALUES (:name, :review)");
        $sth->bindParam(':name', $inputs['name']);
        $sth->bindParam(':review', $inputs['review']);
        $result = $sth->execute();

        if ($result) {
            header("Location: ../SmartPhone4u/Homepagina.php");
            exit;
        } else {
            $errors['database'] = 'Failed to save review. Please try again.';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Invoeren</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Review Invoeren</h2>
    <form method="post" action="">
        <div class="mb-3">
            <label for="n" class="form-label">Naam</label>
            <input type="text" class="form-control" id="n" name="name"
                   value="<?php echo htmlspecialchars($inputs['name'] ?? '', ENT_QUOTES); ?>">
            <div class="form-text text-danger">
                <?php echo $errors['name'] ?? ''; ?>
            </div>
        </div>

        <div class="mb-3">
            <label for="b" class="form-label">Review</label>
            <textarea name="review" id="b" class="form-control"><?php echo htmlspecialchars($inputs['review'] ?? '', ENT_QUOTES); ?></textarea>
            <div class="form-text text-danger">
                <?php echo $errors['review'] ?? ''; ?>
            </div>
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="a" name="agree" value="agree"
                <?php echo (isset($inputs['agree']) && $inputs['agree']) ? 'checked="checked"' : ''; ?>>
            <label class="form-check-label" for="a">Accepteer voorwaarden</label>
            <div class="form-text text-danger">
                <?php echo $errors['agree'] ?? ''; ?>
            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3" name="send">Verzenden</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>




<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->T
<!---->
<?php
// Database connection
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "schoenen";
//
//$conn = new mysqli($servername, $username, $password, $dbname);
//
//// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}
//
//// Fetch shoe brands
//$sql = "SELECT naam FROM merk";
//$result = $conn->query($sql);
//
//if ($result->num_rows > 0) {
//    echo "<h2>Schoenmerken:</h2><ul>";
//    while ($row = $result->fetch_assoc()) {
//        echo "<li>" . htmlspecialchars($row["naam"]) . "</li>";
//    }
//    echo "</ul>";
//    // Display the total number of brands
//    echo "<p>Totaal aantal schoenmerken: " . $result->num_rows . "</p>";
//} else {
//    echo "Geen schoenmerken gevonden.";
//}
//
//$conn->close();
//?>
<!---->
<!--<!-- Form to add a new shoe brand -->-->
<!--<h2>Voeg een nieuw schoenmerk toe:</h2>-->
<!--<form action="add_brand.php" method="post">-->
<!--    <label for="brand">Schoenmerk:</label>-->
<!--    <input type="text" name="brand" id="brand">-->
<!--    <input type="submit" value="Toevoegen">-->
<!--</form>-->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<?php
//$tafel = 3; // The multiplication table number
//
//echo "De waarde van variabele \$tafel is $tafel<br><br>";
//
//// Print the multiplication table
//$sum = 0;
//for ($i = 1; $i <= 10; $i++) {
//    $result = $tafel * $i;
//    echo "$tafel x $i = $result<br>";
//    $sum += $result;
//}
//
//echo "<br>De som van de tafel van $tafel is: $sum";
//?>
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<?php
//// Check if the form was submitted
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
//    // Sanitize input
//    $product = filter_input(INPUT_POST, 'product', FILTER_VALIDATE_INT);
//    $amount = filter_input(INPUT_POST, 'amount', FILTER_VALIDATE_INT);
//
//    // Validate input
//    if ($product === false || $product === null) {
//        echo "<p>Vul het product in!</p>";
//    } elseif ($amount === false || $amount <= 0) {
//        echo "<p>Vul een geldig getal in!</p>";
//    } else {
//        // Define product prices and discounts
//        $prices = [1 => 22, 2 => 17, 3 => 10];
//        $discounts = [1 => 0.20, 2 => 0.30, 3 => 0.50];
//
//        // Calculate the total price with discount
//        $price = $prices[$product];
//        $discount = $discounts[$product];
//        $totalPrice = $amount * $price * (1 - $discount);
//
//        // Product names for display
//        $productNames = [1 => 'handdoeken', 2 => 'broeken', 3 => 'shirts'];
//
//        // Output the result
//        echo "<p>Totale prijs van de $amount " . $productNames[$product] . " is: &euro;" . number_format($totalPrice, 2) . "</p>";
//    }
//} else {
//    echo "<p>Vul alle velden in!</p>";
//}
//?>


// Database connection using PDO
//try {
//    $db = new PDO("mysql:host=localhost;dbname=ofentoets", "root", "");
//    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//} catch (PDOException $e) {
//    die("Database connection failed: " . $e->getMessage());
//}
//