<?php

try {
    $db = new PDO("mysql:host=localhost;dbname=schoenen", "root", "");
} catch (PDOException $e) {
    die("Error!: " . $e->getMessage());
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nieuwMerk = filter_input(INPUT_POST, 'merknaam', FILTER_SANITIZE_STRING);

    if (!empty($nieuwMerk)) {
        $query = $db->prepare("INSERT INTO merk (naam) VALUES (:naam)");
        $query->bindParam(':naam', $nieuwMerk);
        $query->execute();
        echo "<p>Nieuw merk toegevoegd: " . htmlspecialchars($nieuwMerk) . "</p>";
    } else {
        echo "<p>Voer een geldige merknaam in.</p>";
    }
}

$query = $db->prepare("SELECT * FROM merk");
$query->execute();
$merken = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<h3>Voeg een nieuw schoenmerk:</h3>
<form method="post" action="">
    <label for="merknaam">mmerknaam</label>
    <input type="text" id="merknaam" name="merknaam" required>
    <input type="submit" value="Toevoegen">
</form>

<h2>Schoenmerken:</h2>
<ul>
    <?php foreach ($merken as $merk): ?>
        <li><?php echo htmlspecialchars($merk['naam']); ?></li>
    <?php endforeach; ?>
</ul>
