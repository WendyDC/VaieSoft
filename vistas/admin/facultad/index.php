<?php require('header.php'); 

@session_start();
$nombres="";


  if ( $_SESSION['estado'] == "logeado"  && $_SESSION['rol'] == "admin" ) {
      //$nombres=$_SESSION['nombre'];
      //$cedula=$_SESSION['cedula'];
   } else {
      echo "<script language=Javascript> location.href='../../../index.php'; </script>";
   }

require "../../../model/facultad.php";
$fac = new facultad();
$facultades=$fac->listaFacultad();

?>
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="index.php">Inicio</a>
            </li>
            <li>
                <a href="#">Facultad</a>
            </li>
        </ul>
    </div>

    <div class="row">
        <div class="box col-md-12">
        <div class="box-inner">
        <div class="box-header well" data-original-title="">
            <h2><i class="glyphicon glyphicon-folder-close"></i> Gestionar Facultad</h2>
        </div>

        <div class="box-content">
        <a class="btn btn-default" href="agregar.php">
            Agregar
        </a> <br/><br/>
        <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        <?php       
            $i=1;
            
         foreach($facultades as $f): 
            echo '<tr>
                <td class="center">'.$f['nombre'].'</td> 
                <td class="center">
        
                <a href="ver.php?id='.$f['id_facultad'].'">
                   <img alt="Ver" title="Ver" src="../../img/ver.png" height="19" width="19"/>
                </a>
                <a href="editar.php?id='.$f['id_facultad'].'">
                    <img alt="Editar" title="Editar" src="../../img/editar.gif" height="18" width="18"/>
                </a>
                <a href="eliminar.php?id='.$f['id_facultad'].'">
                    <img alt="Eliminar" title="Eliminar" src="../../img/eliminar.png" height="18" width="18"/>
                </a> 
                </td>
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

<?php require('footer.php'); ?>