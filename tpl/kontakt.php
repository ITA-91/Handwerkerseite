<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2501.823130438759!2d6.945329715757494!3d51.167050079580655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b8cd61f23d398b%3A0x2d7685f8183bae29!2sBerufskolleg%20Hilden%20des%20Kreises%20Mettmann!5e0!3m2!1sde!2sde!4v1604397341573!5m2!1sde!2sde" height="300" frameborder="0" style="border:0; width: 100%;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
<section class="contact-section">
    <div class="container">
        <div class="col-md-4">
            <div class="contact-info">
                <h2>Kontaktdaten</h2>
                <p>Sie können uns Montags bis Freitags von 10:00 bis 16:00 Uhr erreichen.</p>
                <ul class="information-list">
                    <li><i class="fa fa-map-marker"></i><span>Am Holterhöfchen 34, 40724 Hilden</span></li>
                    <li><i class="fa fa-phone"></i><span>+49-2173-9938609</span></li>
                    <li><i class="fa fa-envelope-o"></i><span>demo@klaas-it.de</span></li>
                </ul>
            </div>
        </div>
        <div class="col-md-8">
            <?php
            
            $errors = [];
            $keys = [
                'name',
                'nachname',
                'email',
                'telefon',
                'nachricht',
                'datum'
            ];
            $given = [];
            if(isset($_REQUEST['contact'])){

                foreach($_REQUEST as $key => $input){
                    if(!empty($input))
                        $given[] = htmlspecialchars($key);
                    $_REQUEST[$key] = htmlspecialchars($input);
                }

                foreach($keys as $key){
                    if(!in_array($key, $given)){
                        $errors[] = '<b>'.ucfirst($key).'</b>';
                    }
                }

                if(!empty($errors)){
                    $i = 0;
                    $errorstring = "";
                    $wurde_n = "wurden";
                    foreach($errors as $error){
                        if($i == 0){
                            $errorstring = $error;
                        } else {
                            $errorstring .= ", ".$error;
                        }
                        $i++;
                    }
                    if($i == 1){ $wurde_n = "wurde"; }
                    echo '<div class="alert alert-danger" id="error-alert">'.$errorstring.' '.$wurde_n.' nicht angegeben.</div>';
                } else {
                    if(!check_email($_REQUEST['email'])){
                        echo '<div class="alert alert-danger" id="error-alert-email"><b>Email</b> ist nicht korrekt.</div>';
                    } else {
                        if (strtotime($_REQUEST['datum']) <= time()){
                            echo '<div class="alert alert-danger" id="error-alert-email"><b>Datum</b> kann nicht früher als heute sein.</div>';
                        } else {
                            send_mail($_REQUEST['email'], $_REQUEST['name'], $_REQUEST['nachname']);

                            $weekdays = ['Sonntag', 'Montag', 'Dienstag', 'Mittwoch', 'Donnerstag', 'Freitag', 'Samstag'];

                            $date_timestamp = strtotime($_REQUEST['datum']);
                            $diff = ceil(($date_timestamp - time())/60/60/24);
                            $weekday = date('w', $date_timestamp);

                            $tag_e = 'Tage';
                            if ($diff == 1)
                                $tag_e = 'Tag';

                            echo '<div class="alert alert-success">Das Kontaktformular wurde erfolgreich versendet! Es sind noch circa <b>'.$diff.' '.$tag_e.'</b> bis zu Ihrem Termin am <b>'.$weekdays[$weekday].'</b>.</div>';
                        }
                    }
                }

            }

            ?>
                <form action="" method="POST" id="contact-form">
                    <h2>Senden Sie uns eine Nachricht</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <input name="name" id="name" type="text" placeholder="Vorname" required>
                        </div>
                        <div class="col-md-6">
                            <input name="nachname" id="nachname" type="text" placeholder="Nachname" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input name="email" id="email" type="text" placeholder="E-Mail" required>
                        </div>
                        <div class="col-md-6">
                            <input name="telefon" id="telefon" type="text" placeholder="Ihre Rufnummer" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input name="datum" id="datum" type="date" placeholder="Termindatum" required>
                        </div>
                    </div>
                    <textarea name="nachricht" id="nachricht" placeholder="Nachricht" required></textarea>
                    <input type="hidden" name="contact" value="submitted">
                    <input type="submit" onClick="document.getElementById('contact-form').submit();" id="submit_contact" value="Absenden">
                    <div id="msg" class="message"></div>
            </form>
           
        </div>
    </div>
</section>
