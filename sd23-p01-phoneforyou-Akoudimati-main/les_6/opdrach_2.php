<?php
// Check of het formulier is ingediend
if (isset($_POST['bereken'])) {
    // Ophalen en filteren van de invoer
    $getal1 = filter_input(INPUT_POST, 'getal1', FILTER_VALIDATE_FLOAT);
    $getal2 = filter_input(INPUT_POST, 'getal2', FILTER_VALIDATE_FLOAT);
    $bewerking = filter_input(INPUT_POST, 'bewerking', FILTER_SANITIZE_STRING);

    // Controleer of beide getallen geldig zijn ingevoerd
    if ($getal1 === false || $getal2 === false) {
        $resultaat = "Vul geldige getallen in.";
    } else {
        // Voer de geselecteerde bewerking uit
        switch ($bewerking) {
            case 'optellen':
                $resultaat = $getal1 + $getal2;
                break;
            case 'aftrekken':
                $resultaat = $getal1 - $getal2;
                break;
            case 'vermenigvuldigen':
                $resultaat = $getal1 * $getal2;
                break;
            case 'delen':
                if ($getal2 == 0) {
                    $resultaat = "Kan niet delen door nul.";
                } else {
                    $resultaat = $getal1 / $getal2;
                }
                break;
            default:
                $resultaat = "Selecteer een geldige bewerking.";
                break;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekenmachine</title>

    <!-- Bootstrap CSS CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Rekenmachine</h2>

    <form method="post" action="">
        <!-- Invoer eerste getal -->
        <div class="form-group">
            <label for="getal1">Getal 1</label>
            <input type="text" class="form-control" name="getal1" id="getal1" placeholder="Voer het eerste getal in" required>
        </div>


        <div class="form-group">
            <label   class=" mb-3"


            >Kies een bewerking:</label><br>






            <div class="form-check form-check-inline ">
                <input type="radio" class="form-check-input" name="bewerking" value="optellen" id="optellen" required>
                <label class="form-check-label" for="optellen">Optellen</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" name="bewerking" value="aftrekken" id="aftrekken">
                <label class="form-check-label" for="aftrekken">Aftrekken</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" name="bewerking" value="vermenigvuldigen" id="vermenigvuldigen">
                <label class="form-check-label" for="vermenigvuldigen">Vermenigvuldigen</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" name="bewerking" value="delen" id="delen">
                <label class="form-check-label" for="delen">Delen</label>
            </div>
        </div>
        <!-- Invoer tweede getal -->
        <div class="form-group">
            <label for="getal2">Getal 2</label>
            <input type="text" class="form-control" name="getal2" id="getal2" placeholder="Voer het tweede getal in" required>
        </div>

        <!-- Bewerkingen selecteren met radio buttons -->


        <!-- Knop om te berekenen -->
        <button type="submit" class="btn btn-primary" name="bereken">Bereken</button>
    </form>

    <!-- Resultaat -->
    <div class="mt-3">
        <?php
        // Toon het resultaat als het is berekend
        if (isset($resultaat)) {
            echo "<h4>Resultaat: $resultaat</h4>";
        }
        ?>
    </div>
</div>

<!-- Bootstrap JS en dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
