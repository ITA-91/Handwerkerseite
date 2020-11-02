<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Primary Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<title>Schreinerei Heinz - Wir brettern alle Löcher!</title>
		<meta name="title" content="Schreinerei Heinz">
		<meta name="description" content="Wir brettern alle Löcher.">
		<!-- Open Graph / Facebook -->
		<meta property="og:type" content="website">
		<meta property="og:url" content="https://schreiner.klaas-it.de">
		<meta property="og:title" content="Schreinerei Heinz">
		<meta property="og:description" content="Wir brettern alle Löcher.">
		<meta property="og:image" content=assets/img/meta-header.png">
		<!-- Twitter -->
		<meta property="twitter:card" content="summary_large_image">
		<meta property="twitter:url" content="https://schreiner.klaas-it.de">
		<meta property="twitter:title" content="Schreinerei Heinz">
		<meta property="twitter:description" content="Wir brettern alle Löcher.">
		<meta property="twitter:image" content="assets/img/meta-header.png">
		<!-- Styles/JS --->
		<link rel="stylesheet" href="assets/css/scrollbar.css"/>
		<link rel="Shortcut Icon" href="assets/img/icon.png" type="image/x-icon" />
		<link rel="icon" href="assets/img/icon.png" sizes="32x32" />
		<link rel="icon" href="assets/img/icon.png" sizes="192x192" />
		<link rel="apple-touch-icon" href="assets/img/icon.png" />
		<meta name="msapplication-TileImage" content="assets/img/icon.png" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
		<link rel="stylesheet" href="/assets/css/mdb.min.css">
		<script src="https://api.vac.one/js/fp.js"></script>
		<script src="/assets/js/mdb.min.js"></script>
	</head>
	<body style="background-image: url(/assets/img/background.jpg);">
		<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/">
                    <img src="assets/img/icon.png" height="30px" alt="" loading="lazy"/>
                    Schreinerei Heinz
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link" aria-current="page" href="/">Home</a>
                            <a class="nav-link" href="/page/rechner">Preis Rechner</a>
                            <a class="nav-link" href="/page/kontakt">Kontakt</a>
                        </div>
                    </div>
                </div>
            </nav>
		</header>
		<div class="container-fluid" style="padding-top: 10px;">
			<div class="row">
				<div class="col-md-9">
                    <div class="card">
                        <div class="card-body">

                        <?php

                            if(isset($_REQUEST['cat']) && !empty($_REQUEST['cat'])){
                                $page = strtolower(htmlspecialchars($_REQUEST['cat']));
                                if(!file_exists("tpl/".$page.".php")){
                                    $page = 'startseite';
                                }
                            } else {
                                $page = 'startseite';
                            }

                            include $_SERVER['DOCUMENT_ROOT'].'/tpl/'.$page.'.php';

                        ?>
                        
                        </div>
                    </div>
				</div>
				<div class="col-md-3">
					<div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Kontakt</h5>
                            <p class="card-text">
                                <img style="display: block; margin-left: auto; margin-right: auto; width: 25%;" src="/assets/img/zimmermann.png"/>
                                <p><b>Schreinerei Heinz</b></br>
                                Am Holterhöfchen 34</br>
                                40724 Hilden</br>
                                <a href="https://goo.gl/maps/aJgFsAL3sQRqxyH57" target="_blank">Google Maps</a></p>
                                <p>
                                Tel: +49-2173-9938609</br>
                                Mail: demo@klaas-it.de
                                </p>
                                <p>
                                <b>Öffnungszeiten</b></br>
                                Mo-Mi: 09:00 - 16:00</br>
                                Do: Geschlossen</br>
                                Fr-Sa: 10:00 - 14:00
                                </p>
                                <p>
                                <a href="/page/impressum">Impressum</a></br>
                                <a href="/page/datenschutz">Datenschutzerklärung</a></br>
                                </p>
                            </p>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</body>
</html>