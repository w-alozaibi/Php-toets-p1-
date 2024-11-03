<h2>Review</h2>
<form method="post" action="">
    <div class="mb-3">
        <label for="n" class="form-label">Naam</label>
        <input type="text" class="form-control" id="n" name="naam">
    </div>

    <div class="mb-3">
        <label for="b" class="form-label">Bericht</label>
        <textarea name="review" id="b" class="form-control"></textarea>
    </div>

    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="a" name="akkoord" value="akkoord">
        <label class="form-check-label" for="a">Accepteer voorwaarden</label>
    </div>

    <input type="submit" class="btn btn-primary" name="verzenden" value="Verzenden">
</form>
