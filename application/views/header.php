<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
     <meta name="description" content="Application de Gestion des Inscriptions aux Cours Optionnels">
     <meta name="author" content="Gicoteurs">

            <title>Pages</title>
<link href="./assets/favicon.ico" type="image/x-icon" rel="icon">
<link href="./assets/favicon.ico" type="image/x-icon" rel="shortcut icon">

<link rel="stylesheet" href="./assets/css/bootstrap.min.css">      
<link rel="stylesheet" href="./assets/css/font-awesome.min.css">       
<link rel="stylesheet" href="./assets/css/../components/chosen/chosen.min.css">       
<link rel="stylesheet" href="./assets/css/chosen.bootstrap.css">       
<link rel="stylesheet" href="./assets/css/../components/bootstrap-datetimepicker-2.3.4/css/bootstrap-datetimepicker.min.css">  
<link rel="stylesheet" href="./assets/css/../components/tablesorter/css/theme.bootstrap.min.css">        
<link rel="stylesheet" href="./assets/css/gico.css">
	<style type="text/css"></style>
</head>
<body>

<body>
	<container>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Afficher/Masquer le menu</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url();?>">
                        <img src="./assets/img/gico.logo.png" alt="Logo GICO" class="application-logo">GICO</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                                        <li>
                        <a href="login"><i class="fa fa-user-plus"></i> Inscription</a>                        </li>
                        <li>
                        <a href="http://localhost:8888/gico/index.php/login"><i class="fa fa-sign-in"></i> Connexion</a>                        </li>
                                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>

         <div class="container">

        
<p>Cette application permet aux étudiants du Master STIC - ISRI, MIAGE et 2IBS de choisir leurs UE optionnelles</p>

<p>Pour choisir vos UEs optionnelles vous devez :</p>

<ol>
    <li>Vous inscrire et attendre le mail d'activation de votre compte - Vérifiez votre adresse mail!</li>
    <li>Vous loguer sur le système avec les login/password que vous avez choisis</li>
    <li>Faire vos choix à chaque semestre</li>
</ol>
        </div>
        <!-- /container -->
</container>

<style>

	body.tablesorter-disableSelection { -ms-user-select: none; -moz-user-select: -moz-none;-khtml-user-select: none; -webkit-user-select: none; user-select: none; }.tablesorter-resizable-container { position: relative; height: 1px; }.tablesorter-resizable-handle { position: absolute; display: inline-block; width: 8px;top: 1px; cursor: ew-resize; z-index: 3; user-select: none; -moz-user-select: none; }</style>

</body>

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="./assets/js/jquery-1.11.3.min.js"></script>        
        <script src="./assets/js/bootstrap.min.js"></script>        
        <script src="./assets/js/../components/bootstrap-datetimepicker-2.3.4/js/bootstrap-datetimepicker.js"></script>        
        <script src="./assets/js/../components/bootstrap-datetimepicker-2.3.4/js/locales/bootstrap-datetimepicker.fr.js"></script>        
        <script src="./assets/js/../components/tablesorter/js/jquery.tablesorter.min.js"></script>        
        <script src="./assets/js/../components/tablesorter/js/jquery.tablesorter.widgets.min.js"></script>        
        <script src="./assets/js/../components/chosen/chosen.jquery.min.js"></script>        
        <script src="./assets/js/gico.js"></script>        
    


</html>