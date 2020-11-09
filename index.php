<!DOCTYPE html>
<html lang="de" class="no-js">
<head>
    <title>Schreinerei Heinz - Wir brettern alle Löcher!</title>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/assets/css/jquery.bxslider.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/assets/css/font-awesome.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/assets/css/animate.css" media="screen">

    <link rel="stylesheet" type="text/css" href="/assets/css/settings.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css" media="screen">

    <script type="text/javascript" src="/assets/js/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
    <script type="text/javascript" src="/assets/js/gmap3.min.js"></script>
    <script type="text/javascript" src="/assets/js/jquery.migrate.js"></script>
    <script type="text/javascript" src="/assets/js/jquery.bxslider.min.js"></script>
    <script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/assets/js/jquery.imagesloaded.min.js"></script>
    <script type="text/javascript" src="/assets/js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="/assets/js/retina-1.1.0.min.js"></script>
    <script type="text/javascript" src="/assets/js/plugins-scroll.js"></script>

    <script type="text/javascript" src="/assets/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="/assets/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="/assets/js/script.js"></script>

</head>
<body>

<div id="container">
    <header class="clearfix">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="top-line">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <p>
                                <span><i class="fa fa-phone"></i><a href="tel:+4921739938609" style="color: white; text-decoration: none;">+49-2173-9938609</a></span>
                                <span><i class="fa fa-envelope-o"></i><a href="mailto:demo@klaas-it.de" style="color: white; text-decoration: none;">demo@klaas-it.de</a></span>
                            </p>
                        </div>
                        <div class="col-md-6">
                            <ul class="social-icons">
                                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">

                <div class="navbar-header row">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"><img src="/assets/images/icon.png" alt="Logo" style="width: 35px; height: 35px"></a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/">Start</a></li>
                        <li><a href="#">Projekte</a></li>
                        <li><a href="#">Referenzen</a></li>
                        <li><a href="/page/kontakt">Kontakt</a></li>
                        <li class="drop"><a style="cursor: pointer;">Rechtliches</a>
                            <ul class="dropdown">
                                <li><a href="/page/impressum">Impressum</a></li>
                                <li><a href="/page/datenschutz">Datenschutz</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <?php

    if(isset($_REQUEST['cat']) && !empty($_REQUEST['cat'])){
        $page = trim(strtolower(htmlspecialchars($_REQUEST['cat'])));
        if(!file_exists("tpl/".$page.".php")){
            $page = '404';
        }
    } else {
        $page = 'startseite';
    }

    include $_SERVER['DOCUMENT_ROOT'].'/tpl/'.$page.'.php';

    ?>

    <footer>
        <div class="up-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer-widget">
                            <h2>Über uns</h2>
                            <p>Wir sind ein junges darüber hinaus motiviertes Mannschaft seitens Seitenseiten Schreinern, Gestaltern, Architekten darüber hinaus Marketingfachleuten, dasjenige ein Sinnhaftigkeit haben.</p>
                        </div>
                    </div>
                    <div class="col-md-5"></div>
                    <div class="col-md-3">
                        <div class="footer-widget info-widget">
                            <h2>Info</h2>
                            <p class="first-par">Sie können uns während unserer Arbeitszeit kontaktieren.</p>
                            <p><span>Tel.: </span> <a href="tel:+4921739938609" style="color: white; text-decoration: none;">+49-2173-9938609</a></p>
                            <p><span>E-Mail: </span> <a href="mailto:demo@klaas-it.de" style="color: white; text-decoration: none;">demo@klaas-it.de</a></p>
                            <p><span>Offen: </span> Mo. - Fr. von 10:00 bis 16:00 Uhr</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p class="copyright">
            &copy; Copyright <?php echo date("Y"); ?> <a href="https://github.com/FlareCO" target="_blank" rel="sponsored">Dustin Klaas</a> & <a href="https://github.com/marlonbasten" target="_blank" rel="sponsored">Marlon Basten</a>. - Made with <font color="red">&hearts;</font> in Germany.
        </p>
    </footer>

</div>
</body>
</html>