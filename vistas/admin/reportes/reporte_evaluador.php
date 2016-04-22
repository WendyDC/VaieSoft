<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Reporte de Evaluadores</title>
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
    <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="css/buttons.dataTables.min.css">
    <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.11.3.min.js">
    </script>
    <script type="text/javascript" language="javascript" src="js/jquery.dataTables.min.js">
    </script>
    <script type="text/javascript" language="javascript" src="js/dataTables.buttons.min.js">
    </script>
    <script type="text/javascript" language="javascript" src="/js/buttons.flash.min.js">
    </script>
    <script type="text/javascript" language="javascript" src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js">
    </script>
    <script type="text/javascript" language="javascript" src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js">
    </script>
    <script type="text/javascript" language="javascript" src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js">
    </script>
    <script type="text/javascript" language="javascript" src="js/buttons.html5.min.js">
    </script>
    <script type="text/javascript" language="javascript" src="js/buttons.print.min.js">
    </script>

    <link href="../../css/bootstrap-united.min.css" rel="stylesheet">
    

    <link href="../../css/charisma-app.css" rel="stylesheet">
    <link href='../../bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='../../bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='../../bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='../../bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='../../bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='../../bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='../../css/jquery.noty.css' rel='stylesheet'>
    <link href='../../css/noty_theme_default.css' rel='stylesheet'>
    <link href='../../css/elfinder.min.css' rel='stylesheet'>
    <link href='../../css/elfinder.theme.css' rel='stylesheet'>
    <link href='../../css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='../../css/uploadify.css' rel='stylesheet'>
    <link href='../../css/animate.min.css' rel='stylesheet'>

    <script type="text/javascript">
        $(document).ready(function() { 
            $('#example').DataTable( {
               dom: 'Bfrtip', buttons: [ 
                 'copy', 
                 'csv', 
                 'excel', 
                 {
                    extend: 'pdf',
                    orientation: 'landscape',
                    pageSize: 'LEGAL'
                 }, 
                 'print' ] ,

           } ); } );
    </script>

</head>
<body class="dt-example">
    <?php
@session_start();
$nombres="";


  if ( $_SESSION['estado'] == "logeado"  && $_SESSION['rol'] == "admin") {
      //$nombres=$_SESSION['nombre'];
      //$cedula=$_SESSION['cedula'];
   } else {
      echo "<script language=Javascript> location.href='../../../index.php'; </script>";
   }
require "../../../model/evaluador.php";
$eva = new evaluador();
$evaluadores=$eva->buscarEvaluadores();

?>

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
            <a class="navbar-brand" href="../../../index.php"> <img alt="PROYECTOS FINU" src="../../img/banner2.jpg" />
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
                        <li><a class="ajax-link" href="../index.php"><i class="glyphicon glyphicon-home"></i><span> Inicio</span></a>
                        </li>
                        <li><a class="ajax-link" href="../propuesta"><i
                                    class="glyphicon glyphicon-book"></i><span> Propuesta</span></a></li>
                        <li><a class="ajax-link" href="../proyecto"><i
                                    class="glyphicon glyphicon-list-alt"></i><span> Proyecto</span></a></li>
                        <li><a class="ajax-link" href="../convocatoria"><i
                                    class="glyphicon glyphicon-folder-open"></i><span> Convocatoria</span></a></li>
                        <li><a class="ajax-link" href="../investigador"><i
                                    class="glyphicon glyphicon-user"></i><span> Investigador</span></a></li>
                        <li><a class="ajax-link" href="../evaluador"><i
                                    class="glyphicon glyphicon-user"></i><span> Evaluador</span></a></li>
                        <li><a class="ajax-link" href="../facultad"><i
                                    class="glyphicon glyphicon-folder-close"></i><span> Facultad</span></a></li>
                        <li><a class="ajax-link" href="../grupo"><i
                                    class="glyphicon glyphicon-pencil"></i><span> Grupo de Investigaci&oacute;n</span></a></li>
                        <li><a class="ajax-link" href="../rubro"><i
                                    class="glyphicon glyphicon-usd"></i><span> Rubro</span></a></li>
                        <li><a class="ajax-link" href="../reportes"><i
                                    class="glyphicon glyphicon-file"></i><span> Reportes</span></a></li>
                        <li><a class="ajax-link" href="../../../controller/cerrarsesion.php"><i
                                    class="glyphicon glyphicon-log-out"></i><span> Cerrar Sesi&oacute;n</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->

            <?php } ?>

    <div id="content" class="col-lg-10 col-sm-10">
         <div class="row">
        <div class="box col-md-12">
        <div class="box-inner">
        <div class="box-header well" data-original-title="">
            <h2><i class="glyphicon glyphicon-book"></i> Reporte de Evaluador</h2>
        </div>

        <div class="box-content">
        <table id="example" class="table table-striped table-bordered bootstrap-datatable datatable responsive">
        <thead>
        <tr>
            <th>Identificaci&oacute;n</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Tel&eacute;fono</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        <?php 
      
            $i=1;
            
         foreach($evaluadores as $eva): 
            echo '<tr>
                <td class="center">'.$eva['identificacion'].'</td> 
                <td class="center">'.$eva['nombre'].'</td> 
                <td class="center">'.$eva['apellido'].'</td> 
                <td class="center">'.$eva['telefono'].'</td>
                <td class="center">'.$eva['email'].'</td>
            </tr>';
        
            $i=$i+1;
        endforeach;
            
      ?>
       
        </tbody>
        </table>
         </div>
        </div>
        </div>
    
    </div><!--/row-->

    </div>

<?php require('footer.php'); ?>