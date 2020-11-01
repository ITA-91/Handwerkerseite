<h3>Kontakt</h3>
<hr>
<?php

if(isset($_REQUEST['validate'])){
    echo '<h4>Vielen Dank für Ihre Anfrage, ein Kundendienst Mitarbeiter wird sich in Kürze bei Ihnen melden.</h4>';
} else {

    ?>
<form action="" method="POST" id="role">
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="vorname">Vorname</label>
                <input type="text" name="vorname" id="vorname" placeholder="Vorname" class="form-control">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="nachname">Nachname</label>
                <input type="text" name="nachname" id="nachname" placeholder="Nachname" class="form-control">
            </div>
        </div>
    </div>
    <div class="row" style="padding-top: 10px;">
        <div class="col">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Email" class="form-control">
            </div>
        </div>
    </div>
    <div class="row" style="padding-top: 10px;">
        <div class="col">
            <div class="form-group">
                <label for="auftragsnummer">Auftragsnummer</label>
                <input type="text" name="auftragsnummer" id="auftragsnummer" placeholder="Auftragsnummer" class="form-control">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="rechnungsnummer">Rechnungsnummer</label>
                <input type="text" name="rechnungsnummer" id="rechnungsnummer" placeholder="Rechnungsnummer" class="form-control">
            </div>
        </div>
    </div>
    <div class="row" style="padding-top: 10px;">
        <div class="col">
            <div class="form-group">
                <label for="nachricht">Ihre Nachricht</label>
                <textarea name="nachricht" id="nachricht" placeholder="Ihre Nachricht" class="form-control" rows="6"></textarea>
            </div>
        </div>
    </div>
    <hr>
    <button type="submit" name="validate" class="btn btn-primary">Absenden</button>
</form>
<?php } ?>