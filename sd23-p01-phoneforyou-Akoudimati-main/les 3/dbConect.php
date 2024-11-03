<?php
// Maak verbinding met de database
try {
    $db = new PDO("mysql:host=localhost;dbname=cars", "root", "");
} catch (PDOException $e) {
    die("Error!: " . $e->getMessage());
}

// Maak een SQL-query en voer deze uit
$query = $db->prepare("SELECT * FROM electric_car");
$query->execute();

// Vraag de ontvangen data op en toon deze op het scherm
$cars = $query->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
var_dump($cars);
echo "</pre>";
?>
