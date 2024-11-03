
<?php
// Het PHP deel van het formulier / start
const AMOUNT_REQUIRED = 'Bedrag invullen';
const BTW_REQUIRED = 'BTW selecteren';

$errors = [];
$inputs = [];
$melding = "Vul BTW en bedrag in";

// Het PHP deel van het formulier / validate
if (isset($_POST['vitrekenen'])) {
    // Validate bedrag
    $bedrag = filter_input(INPUT_POST, 'bedrag', FILTER_VALIDATE_FLOAT);
    if ($bedrag === false) {
        $errors['bedrag'] = AMOUNT_REQUIRED;
    } else {
        $inputs['bedrag'] = $bedrag;
    }

    // Validate btw
    $btw = filter_input(INPUT_POST, 'btw', FILTER_VALIDATE_INT);
    if ($btw === false) {
        $errors['btw'] = BTW_REQUIRED;
    } else {
        $inputs['btw'] = $btw;
    }

    // Het PHP deel van het formulier / berekenen
    if (count($errors) === 0) {
        if ($btw === 9) {
            $melding = "Bedrag € " . number_format($bedrag * 1.09, 2) . " inclusief 9% BTW.";
        } else {
            $melding = "Bedrag € " . number_format($bedrag * 1.21, 2) . " inclusief 21% BTW.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>BTW Berekenen</title>
</head>
<body>
<div class="container mt-5">
    <h2>BTW Berekenen</h2>
    <form method="post">
        <div class="form-group">
            <label for="n" class="form-label">Bedrag exclusief BTW</label>
            <input type="text" class="form-control <?php echo isset($errors['bedrag']) ? 'is-invalid' : ''; ?>" id="n" name="bedrag"
                   value="<?php echo isset($inputs['bedrag']) ? htmlspecialchars($inputs['bedrag']) : ''; ?>">
            <div class="invalid-feedback">
                <?php echo isset($errors['bedrag']) ? htmlspecialchars($errors['bedrag']) : ''; ?>
            </div>
        </div>

        <div class="form-group">
            <label class="form-label">Kies het BTW tarief</label>

            <div class="form-check">
                <input class="form-check-input <?php echo isset($errors['btw']) ? 'is-invalid' : ''; ?>" type="radio" name="btw" value="9" id="flexRadioDefault1"
                    <?php if (isset($inputs['btw']) && $inputs['btw'] == 9) echo "checked"; ?>>
                <label class="form-check-label" for="flexRadioDefault1">
                    Laag, 9%
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input <?php echo isset($errors['btw']) ? 'is-invalid' : ''; ?>" type="radio" name="btw" value="21" id="flexRadioDefault2"
                    <?php if (isset($inputs['btw']) && $inputs['btw'] == 21) echo "checked"; ?>>
                <label class="form-check-label" for="flexRadioDefault2">
                    Hoog, 21%
                </label>
            </div>

            <div class="invalid-feedback">
                <?php echo isset($errors['btw']) ? htmlspecialchars($errors['btw']) : ''; ?>
            </div>
        </div>

        <button type="submit" name="vitrekenen" class="btn btn-primary">Bereken</button>
    </form>

    <div class="result mt-3">
        <strong><?php echo htmlspecialchars($melding); ?></strong>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

