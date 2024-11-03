<?php

$resultaat = "";
$errors = [];
$inputs = [];

if (isset($_POST['bereken'])) {
    $getal1 = filter_input(INPUT_POST, 'getal1', FILTER_VALIDATE_FLOAT);
    $getal2 = filter_input(INPUT_POST, 'getal2', FILTER_VALIDATE_FLOAT);
    $bewerking = filter_input(INPUT_POST, 'bewerking', FILTER_SANITIZE_STRING);

    // Controleer of beide getallen geldig zijn ingevoerd
    if ($getal1 === false) {
        $errors['getal1'] = "Vul een geldig getal in voor Getal 1.";
    } else {
        $inputs['getal1'] = $getal1;
    }

    if ($getal2 === false) {
        $errors['getal2'] = "Vul een geldig getal in voor Getal 2.";
    } else {
        $inputs['getal2'] = $getal2;
    }

    if (empty($bewerking)) {
        $errors['bewerking'] = "Selecteer een bewerking.";
    }

    if (count($errors) === 0) {
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
            <input type="text" class="form-control <?php echo isset($errors['getal1']) ? 'is-invalid' : ''; ?>" name="getal1" id="getal1" placeholder="Voer het eerste getal in"
                   value="<?php echo isset($inputs['getal1']) ? htmlspecialchars($inputs['getal1']) : ''; ?>">
            <div class="invalid-feedback">
                <?php echo isset($errors['getal1']) ? htmlspecialchars($errors['getal1']) : ''; ?>
            </div>
        </div>

        <!-- Bewerkingen selecteren met radio buttons -->
        <div class="form-group">
            <label class="mb-3">Kies een bewerking:</label>
            <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input <?php echo isset($errors['bewerking']) ? 'is-invalid' : ''; ?>" name="bewerking" value="optellen" id="optellen"
                    <?php if (isset($inputs['bewerking']) && $inputs['bewerking'] == 'optellen') echo "checked"; ?>>
                <label class="form-check-label" for="optellen">Optellen</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input <?php echo isset($errors['bewerking']) ? 'is-invalid' : ''; ?>" name="bewerking" value="aftrekken" id="aftrekken"
                    <?php if (isset($inputs['bewerking']) && $inputs['bewerking'] == 'aftrekken') echo "checked"; ?>>
                <label class="form-check-label" for="aftrekken">Aftrekken</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input <?php echo isset($errors['bewerking']) ? 'is-invalid' : ''; ?>" name="bewerking" value="vermenigvuldigen" id="vermenigvuldigen"
                    <?php if (isset($inputs['bewerking']) && $inputs['bewerking'] == 'vermenigvuldigen') echo "checked"; ?>>
                <label class="form-check-label" for="vermenigvuldigen">Vermenigvuldigen</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input <?php echo isset($errors['bewerking']) ? 'is-invalid' : ''; ?>" name="bewerking" value="delen" id="delen"
                    <?php if (isset($inputs['bewerking']) && $inputs['bewerking'] == 'delen') echo "checked"; ?>>
                <label class="form-check-label" for="delen">Delen</label>
            </div>
            <div class="invalid-feedback">
                <?php echo isset($errors['bewerking']) ? htmlspecialchars($errors['bewerking']) : ''; ?>
            </div>
        </div>

        <!-- Invoer tweede getal -->
        <div class="form-group">
            <label for="getal2">Getal 2</label>
            <input type="text" class="form-control <?php echo isset($errors['getal2']) ? 'is-invalid' : ''; ?>" name="getal2" id="getal2" placeholder="Voer het tweede getal in"
                   value="<?php echo isset($inputs['getal2']) ? htmlspecialchars($inputs['getal2']) : ''; ?>">
            <div class="invalid-feedback">
                <?php echo isset($errors['getal2']) ? htmlspecialchars($errors['getal2']) : ''; ?>
            </div>
        </div>

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
