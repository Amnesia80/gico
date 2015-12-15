<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
     <meta name="description" content="Application de Gestion des Inscriptions aux Cours Optionnels">
     <meta name="author" content="Gicoteurs">

            <title><?php echo $title; ?></title>
<link href="./assets/favicon.ico" type="image/x-icon" rel="icon">
<link href="./assets/favicon.ico" type="image/x-icon" rel="shortcut icon">

<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/bootstrap.min.css">      
<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/font-awesome.min.css">       
<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/../components/chosen/chosen.min.css">       
<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/chosen.bootstrap.css">       
<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/../components/bootstrap-datetimepicker-2.3.4/css/bootstrap-datetimepicker.min.css">  
<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/../components/tablesorter/css/theme.bootstrap.min.css">        
<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/gico.css">
  <style type="text/css"></style>
</head>

<?php

$this->session->userdata('logged_in');


if ( $this->session->userdata('logged_in') == NULL) 
{
	?>
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
                    <a class="navbar-brand" href="#">
                        <img src="<?php echo base_url();?>assets/img/gico.logo.png" alt="Logo GICO" class="application-logo">GICO</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                                        <li>
                        <a href="/frontGico/inscription.html"><i class="fa fa-user-plus"></i> Inscription</a>                        </li>
                        <li>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav> 
       <?php
}
else
{
  echo"xD";
}


?>
