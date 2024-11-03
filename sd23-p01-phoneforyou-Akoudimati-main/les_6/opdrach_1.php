<?php
if (isset($_POST['bereken'])) {


    $bedrag = filter_input(INPUT_POST, 'bedrag', FILTER_VALIDATE_FLOAT);


    if ($bedrag === false) {
        $resultaat = "Vul een geldig bedrag in.";
    } else {

        if (isset($_POST['btw'])) {
            if ($_POST['btw'] == '0.09') {
                $btw = 0.09;
            } elseif ($_POST['btw'] == '0.21') {
                $btw = 0.21;
            } else {
                $resultaat = "Selecteer een geldig BTW-percentage.";
                $btw = 0;
            }
        } else {
            $resultaat = "Selecteer een BTW-percentage.";
            $btw = 0;
        }

        if (isset($btw) && $btw > 0) {
            $bedrag_incl_btw = $bedrag + ($bedrag * $btw);
            $resultaat = "€ " . number_format($bedrag_incl_btw, 2, ',', '.');
        }
    }
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BTW Calculator</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>BTW Calculator</h2>

    <form method="post" action="">
        <!-- Invoer bedrag exclusief BTW -->
        <div class="form-group">
            <label for="bedrag">Bedrag exclusief BTW</label>
            <input type="text" class="form-control" name="bedrag" id="bedrag" placeholder="Voer een bedrag in" required>
        </div>

        <!-- BTW-selectie met radio buttons -->
        <div class="form-group">
            <label>BTW-percentage</label><br>
            <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" name="btw" value="0.09" id="btw9" required>
                <label class="form-check-label" for="btw9">9% BTW</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" name="btw" value="0.21" id="btw21">
                <label class="form-check-label" for="btw21">21% BTW</label>
            </div>
        </div>

        <!-- Knop om te berekenen -->
        <button type="submit" class="btn btn-primary" name="bereken">Uitrekenen</button>
    </form>

    <!-- Resultaat -->
    <div class="mt-3">
        <?php
        // Toon het resultaat als het is berekend
        if (isset($resultaat)) {
            echo "<h4>Bedrag inclusief BTW: $resultaat</h4>";
        }
        ?>
    </div>
</div>

<!-- Bootstrap JS en dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
