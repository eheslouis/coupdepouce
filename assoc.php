<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="description" content="Coup de Pouce">
        <meta name="author" content="Elodie Heslouis">
        <title>Coup de Pouce</title>
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/ie-emulation-modes-warning.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>
        <!-- Custom styles for this template -->
        <link href="css/main.css" rel="stylesheet">
        <link href="css/navbar.css" rel="stylesheet">
        <link href="css/leftColumn.css" rel="stylesheet">
        <link href="css/assoc.css" rel="stylesheet">
    </head>

    <body>
        <div class="leftImage"></div>
        <div class="rightImage"></div>
        <div class="container">
            <?php
                include "common/nextAgenda.php";
            ?>
            <?php
                include "common/navbar.php";
            ?>
            <div class="row">
                <div class="col-md-9 col-md-push-3">
                    <div class="row row-eq-height">
                        <div class="col-md-9">
                            <h3>
                                Coup de Pouce, c'est quoi?
                            </h3>
                            <div class="contenu">
                                    Coup de Pouce est une association française loi 1901, composée de bénévoles et reconnue au Vietnam auprès du Paccom depuis 2000. Elle aide les familles défavorisées de Hanoï, et plus particulièrement les enfants, via plusieurs projets dont le parrainage.
                            </div>
                        </div>
                        <div class="col-md-3">
                            <img src="images/SOB.jpg">
                        </div>
                    </div>
                    <div class="row row-eq-height">
                        <div class="col-md-9">
                            <h3>
                                Coup de Pouce, en bref, c'est aujourd'hui:
                            </h3>
                            <div class="liste">
                                <ul>
                                    <li>10 tonnes de riz distribuées par an</li>
                                    <li>des colis mensuels distribués à 30 familles</li>
                                    <li>2 écoles construites en 2 ans à Méo Vac (en partenariat avec l’APE du lycée)</li>
                                    <li>des aides régulières à des associations, organismes ou ONG partenaires</li>
                                    <li>une bourse d’études créée en 2015 (2 enfants en apprentissage et 1 jeune fille en études supérieures)</li>
                                    <li>un programme d’amélioration de l’environnement sanitaire des enfants parrainés</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <img src="images/SOB.jpg">
                        </div>
                    </div>
                    <div class="row row-eq-height">
                        <div class="col-md-9">
                            <h3>
                                Que faisons-nous?
                            </h3>
                            <div class="liste">
                                <ul>
                                    <li>Parrainages d’enfants: distribution de colis alimentaires mensuels pour permettre une scolarisation jusqu’au Bac.</li>
                                    <li>Bourse d’études: soutien aux anciens enfants parrainés pour leurs études supérieures ou formation professionnelle.</li>
                                    <li>Amélioration de l’habitat: financement de travaux pour un meilleur environnement sanitaire et social des enfants parrainés.</li>
                                    <li>Soutien aux associations partenaires de Coup de Pouce oeuvrant dans le secteur del’éducation.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <img src="images/SOB.jpg">
                        </div>
                    </div>
                    <div class="row row-eq-height">
                        <div class="col-md-9">
                            <h3>
                                Comment nous aider?
                            </h3>
                            <div class="liste">
                                <ul>
                                    <li>En parrainant un enfant.</li>
                                    <li>En devenant membre car seules les cotisations contribuent au fonctionnement de l’association.</li>
                                    <li>En faisant un don qui sera intégralement affecté au projet qui vous tient à coeur.</li>
                                    <li>En donnant de votre temps lors des différentes activités de l’association.</li>
                                    <li> En participant à nos évènements tout au long de l’année (ventes de livres, calendriers, charity Bazar…)</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <img src="images/SOB.jpg">
                        </div>
                    </div>
                </div>
                <?php
                    include "common/leftColumn.php";
                ?>
            </div>
            <?php
                include "common/footer.php";
            ?>
        </div>

<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script src="js/format-google-calendar.min.js"></script>
    <script src="common/nextAgenda.js"></script>
    </body>
</html>