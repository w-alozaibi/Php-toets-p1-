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

// Vraag de ontvangen data op en toon deze in een Bootstrap-tabel
$cars = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electric Cars</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Electric Cars List</h1>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Brand</th>
            <th>Model</th>
            <th>Range (km)</th>
            <th>Price (€)</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($cars as $car): ?>
            <tr>
                <td><?php echo htmlspecialchars($car['id']); ?></td>
                <td><?php echo htmlspecialchars($car['brand']); ?></td>
                <td><?php echo htmlspecialchars($car['model']); ?></td>
                <td><?php echo htmlspecialchars($car['range']); ?></td>
                <td><?php echo htmlspecialchars($car['price']); ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Bootstrap JS and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
