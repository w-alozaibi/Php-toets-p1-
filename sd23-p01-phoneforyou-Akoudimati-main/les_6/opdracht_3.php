<?php
// Controleer of de kleur is ingesteld
$achtergrondkleur = 'white'; // Standaard achtergrondkleur

if (isset($_POST['kleur'])) {
    $achtergrondkleur = $_POST['kleur']; // Stel de achtergrondkleur in op de geselecteerde kleur
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Achtergrondkleur Instellen</title>
    <style type="text/css">
        body {
            background-color: <?php echo $achtergrondkleur; ?>; /* Stel de achtergrondkleur in */
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h2>Kies een Achtergrondkleur</h2>

    <form method="post" action="">
        <div class="form-group">
            <label>Kies een kleur:</label><br>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="kleur" value="pink" id="kleurPink" required>
                <label class="form-check-label" for="kleurPink">Roze</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="kleur" value="lightblue" id="kleurBlauw">
                <label class="form-check-label" for="kleurBlauw">Lichtblauw</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="kleur" value="lightgreen" id="kleurGroen">
                <label class="form-check-label" for="kleurGroen">Lichtgroen</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="kleur" value="yellow" id="kleurGeel">
                <label class="form-check-label" for="kleurGeel">Geel</label>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Kleur Instellen</button>
    </form>
</div>

<!-- Bootstrap JS en dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
