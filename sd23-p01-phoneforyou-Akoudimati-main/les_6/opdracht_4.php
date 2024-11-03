<?php
$resultaat = '';

if (isset($_POST['bereken'])) {

    $bedrag = filter_input(INPUT_POST, 'bedrag', FILTER_VALIDATE_FLOAT);
    $korting_percentage = filter_input(INPUT_POST, 'korting', FILTER_VALIDATE_FLOAT);


    if ($bedrag === false || $korting_percentage === false) {
        $resultaat = "Vul een geldig bedrag en kortingspercentage in.";
    } else {

        $korting = $bedrag * ($korting_percentage / 100);
        $bedrag_incl_korting = $bedrag - $korting;

        $resultaat = "Het bedrag na korting is: € " . number_format($bedrag_incl_korting, 2, ',', '.');
    }
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Korting Berekenen</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Korting Berekenen</h2>

    <form method="post" action="">
        <!-- Invoer voor het geldbedrag -->
        <div class="form-group">
            <label for="bedrag">Geldbedrag</label>
            <input type="text" class="form-control" name="bedrag" id="bedrag" placeholder="Voer een bedrag in" required>
        </div>

        <!-- Invoer voor het kortingspercentage -->
        <div class="form-group">
            <label for="korting">Kortingspercentage (%)</label>
            <input type="text" class="form-control" name="korting" id="korting" placeholder="Voer een kortingspercentage in" required>
        </div>

        <!-- Knop om te berekenen -->
        <button type="submit" class="btn btn-primary" name="bereken">Uitrekenen</button>
    </form>

    <!-- Resultaat -->
    <div class="mt-3">
        <?php
        // Toon het resultaat als het is berekend
        if (!empty($resultaat)) {
            echo "<h4>$resultaat</h4>";
        }
        ?>
    </div>
</div>

<!-- Bootstrap JS en dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
