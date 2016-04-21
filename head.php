<?php include 'config.php' ?>
<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta charset="utf-8">
    <title>Vicerrectoria Asistente de Investigaci&oacute;n y Extensi&oacute;n</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <!-- The styles -->
    <link id="bs-css" href="vistas/css/bootstrap-united.min.css" rel="stylesheet">

    <link href="vistas/css/charisma-app.css" rel="stylesheet">
    <link href='vistas/bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='vistas/bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='vistas/bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='vistas/bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='vistas/bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='vistas/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='vistas/css/jquery.noty.css' rel='stylesheet'>
    <link href='vistas/css/noty_theme_default.css' rel='stylesheet'>
    <link href='vistas/css/elfinder.min.css' rel='stylesheet'>
    <link href='vistas/css/elfinder.theme.css' rel='stylesheet'>
    <link href='vistas/css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='vistas/css/uploadify.css' rel='stylesheet'>
    <link href='vistas/css/animate.min.css' rel='stylesheet'>
    
     <!-- jQuery -->
    <script src="vistas/bower_components/jquery/jquery.min.js"></script>
    <!-- bootstrap -->
     <script src="vistas/js/bootstrap-select.min.js"></script>
     <script src="vistas/js/bootstrap-select.js.map"></script>
     <script src="vistas/js/bootstrap-select.js"></script>
     
     <link href='vistas/css/bootstrap-select.css' rel='stylesheet'>
     <link href='vistas/css/bootstrap-select.css.map' rel='stylesheet'>
     <link href='vistas/css/bootstrap-select.min.css' rel='stylesheet'>
 
   

    <link rel="shortcut icon" href="vistas/img/ufps.ico">

    
    <script language="javascript">
      $(document).ready(function(){
         $("#comboFacultad").change(function () {
            $("#comboFacultad option:selected").each(function () {
            //alert($(this).val());
              elegido=$(this).val();
              $.post("script/comboFacultad.php", { elegido: elegido }, function(data){
              $("#facul").html(data);
              
            });     
              });
         })
        
      });
    </script>
    
</head>

<body>
<?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">
        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"> <img alt="PROYECTOS FINU" src="vistas/img/banner2.jpg" />
                </a>           
        </div>
    </div>
    <!-- topbar ends -->
<?php } ?>
<div class="ch-container">
    <div class="row">
        <?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>

        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Menu</li>
                        <li><a class="ajax-link" href="index.php"><i class="glyphicon glyphicon-home"></i><span> Inicio</span></a>
                        </li>
                        <li><a class="ajax-link" href="registrar.php"><i class="glyphicon glyphicon-user"></i><span> Registrarse</span></a>
                        </li>
                        <li><a class="ajax-link" href="registrar_evaluador.php"><i class="glyphicon glyphicon-user"></i><span> Registrarse Par Evaluador</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <?php } ?>
