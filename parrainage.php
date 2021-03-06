<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="description" content="Coup de Pouce">
        <meta name="author" content="Elodie Heslouis">
        <!-- <link rel="icon" href="../../favicon.ico"> -->
        <title>Coup de Pouce</title>
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/ie-emulation-modes-warning.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>
        <!-- Custom styles for this template -->
        <link href="css/main.css" rel="stylesheet">
        <link href="css/navbar.css" rel="stylesheet">
        <link href="css/leftColumn.css" rel="stylesheet">
        <link href="css/parrainage.css" rel="stylesheet">
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
                <h1>
                    Le Parrainage
                </h1>
            </div>
            <a name="pourquoi"></a>
            <div class="row">
                <div class="col-md-8">
                    <h3>
                        Pourquoi?
                    </h3>
                    <div class="contenu">
                        L'éducation est une priorité, encore plus dans un pays en plein développement.<br>Parrainer un enfant, c'est lui offrir la chance d'aller à l'école, sans que cela ne soit une charge pour sa famille, mais au contraire, une aide précieuse.<br>En faisant des études, l'enfant s'assure, et assure à ses proches, des conditions sociables plus stables et donc un meilleur avenir.<br>Le but d'un parrainage s'inscrit donc sur du long terme. Il ne s'agit pas de donner seulement de la nourriture à une famille, mais de soutenir un projet de vie.<br>
                    </div>
                </div>
                <div class="col-md-4 col-image">
                    <!-- <img class="assoc-img" src="images/Tuan.jpg"> -->
                    <img class="assoc-img" src="images/Linh.jpg">
                </div>
            </div>
            <a name="qui"></a>
            <div class="row">
                <div class="col-md-8">
                    <h3>
                        Qui?
                    </h3>
                    <h4>
                        Les filleuls
                    </h4>
                    <div class="contenu">
                        Les enfants parrainés viennent de familles pauvres de la ville de Hanoi ou de sa très proche banlieue. Ces familles nous sont suggérées par la Caisse de Protection de l'Enfance de Hanoi via les Comités de quartier, ou par des associations partenaires avec qui nous avons tissé des relations de confiance.<br>Après une ou plusieurs visites à leur domicile et l'étude de leurs conditions de vie par des membres de l'association, Coup de Pouce décide, ou non, de les intégrer au Programme Parrainages.<br>Les enfants qui ne sont pas acceptés sont rédirigés vers d'autres ONG ou associations, plus à même de les aider.<br>
                    </div>
                    <h4>
                        Les parrains
                    </h4>
                    <div class="contenu">
                        Les personnes souhaitant parrainer un enfant peuvent envoyer un email de demande à l'adresse suivante : <a href="mailto:cdpvn.parrainages@hotmail.fr">cdpvn.parrainages@hotmail.fr</a><br>Dès réception de cet email, elles seront inscrites sur la liste d'attente officielle des parrains. En cas de besoin (nouvel enfant parrainé, désistement, etc…), Coup de Pouce sollicite les parrains dans l'ordre chronologique. Chaque parrain est libre d'entretenir la relation qu'il souhaite avec l'enfant : certains communiquent régulièrement, avec photos ou non, d'autres préfèrent rester discrets.<br>Coup de Pouce demande cependant de toujours garder le lien entre le filleul et le parrain, afin de maintenir des relations de confiance entre chacun.<br>
                    </div>
                </div>
                <div class="col-md-4 col-image">
                    <img class="assoc-img" src="images/parrains.jpg">
                </div>
            </div>
            <a name="comment"></a>
            <div class="row">
                <div class="col-md-8">
                    <h3>
                        Comment?
                    </h3>
                    <div class="contenu">
                        Lors de son entrée dans le programme, chaque enfant reçoit une couverture et une moustiquaire. La famille signe une convention avec Coup de Pouce, renouvelée chaque année, où chacun prend note de ses devoirs et de ses droits.<br>
                        <p style="padding-left: 2em;">
                            - Une visite "surprise" est réalisée chaque année par des membres de Coup de Pouce, afin de faire le bilan des événements familiaux, de l'aide reçue, des projets de la famille et de leurs conditions de vie. Un compte-rendu de cette visite avec photos est envoyé au parrain.<br>
                            - Chaque mois, Coup de Pouce distribue à la famille 20 kg de riz, un colis dit "épicerie" (huile, sucre, lessive, sauce poisson, nouilles) et une enveloppe scolaire de 100. 000 vnd (environ 4 euros) -sauf en juin, juillet et août, où il n'y a pas école. C'est aussi l'occasion de prendre des nouvelles de la famille et de l'enfant. Ce sont ces distributions que les parrains financent.<br>
                            - En juin, la famille s'engage à donner à Coup de Pouce une copie du carnet de notes de l'enfant, preuve que celui-ci est bien scolarisé, et signe la convention pour l'année suivante.<br>
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-image">
                    <img class="assoc-img" src="images/distribution.jpg">
                </div>
            </div>

    <script>
        document.getElementById('nav-parrainage').className += ' active';
    </script>

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