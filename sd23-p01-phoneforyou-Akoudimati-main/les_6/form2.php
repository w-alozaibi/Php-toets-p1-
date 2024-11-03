<?php
if (isset($_POST['verzenden'])) {
    echo "Het formulier is verzonden! <br>";


    $name = filter_input(INPUT_POST, 'naam', FILTER_SANITIZE_SPECIAL_CHARS);
    $review = filter_input(INPUT_POST, 'review', FILTER_SANITIZE_SPECIAL_CHARS);


    echo "Naam: " . $name . "<br>";
    echo "Bericht: " . $review . "<br>";


    if (isset($_POST['akkoord'])) {
        echo "Voorwaarden geaccepteerd!";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulieren</title>

    <!-- Bootstrap CSS CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Review</h2>
    <form method="post" action="">
        <div class="form-group">
            <label for="naam">Naam</label>
            <input type="text" class="form-control" name="naam" id="naam" placeholder="Voer uw naam in">
        </div>

        <div class="form-group">
            <label for="review">Bericht</label>
            <textarea class="form-control" name="review" id="review" rows="3" placeholder="Schrijf uw review"></textarea>
        </div>

        <div class="form-check">
            <input type="checkbox" class="form-check-input" name="akkoord" value="akkoord" id="akkoord">
            <label class="form-check-label" for="akkoord">Accepteer voorwaarden</label>
        </div>

        <button type="submit" class="btn btn-primary mt-3" name="verzenden">Verzenden</button>
    </form>
</div>

<!-- Bootstrap JS and dependencies (optional) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
