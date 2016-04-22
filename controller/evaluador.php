<?php

/**
 * Description of registrar
 *
 * @author Diana Calderon
 */

@session_start();
$nombres="";


       if ( $_SESSION['estado'] == "logeado" ) {
           $nombres=$_SESSION['usuario'];
          //$identificacion=$_SESSION['identificacion'];
        } else {
          echo "<script language=Javascript> location.href='../index.php'; </script>";
        }

require "../model/evaluador.php";

$eva = new evaluador();

$opcion=$_GET['opc'];

if($opcion==1)//Agregar evaluador
{
    $evaluador=array();
    $evaluador[0]=$_POST['identificacion'];
    $evaluador[1]=$_POST['nombre'];
    $evaluador[2]=$_POST['apellido'];
    $evaluador[3]=$_POST['telefono'];
    $evaluador[4]=$_POST['email'];
    $evaluador[5]=$_POST['urlcvlac'];
    $evaluador[6]=$_POST['disciplinas'];

    $evaluad=$eva->buscarEvaluadorPorCedula($evaluador[0]);

    if($evaluad['identificacion']==0){
      if($eva->agregarEvaluador($evaluador)){
          
          
       echo "<script> alert (\"Se registro el evaluador Correctamente.\"); </script>";
      }
      else{
        echo "<script> alert (\"No se pudo registrar el evaluador. Ya existe en el Sistema \"); </script>";      
      }
    }    
    else{
      echo "<script> alert (\"No se pudo registrar el evaluador. Ya existe en el Sistema \"); </script>";
      
    }
    echo "<script language=Javascript> location.href=\"../vistas/admin/evaluador\"; </script>";         

    
die();
}

if($opcion==2)//Editar evaluador
{
    $evaluador=array();
    $evaluador[0]=$_POST['identificacion'];
    $evaluador[1]=$_POST['nombre'];
    $evaluador[2]=$_POST['apellido'];
    $evaluador[3]=$_POST['telefono'];
    $evaluador[4]=$_POST['email'];
    $evaluador[5]=$_POST['id_evaluador'];
    
    
    if($eva->editarEvaluador($evaluador[5], $evaluador))
      echo "<script> alert (\"Se actualizo la informacion del evaluador correctamente.\"); </script>";
    else
      echo "<script> alert (\"Error. No se permite actualizar la informacion del evaluador.\"); </script>";
    
echo "<script language=Javascript> location.href=\"../vistas/admin/evaluador\"; </script>";
die();
}

if($opcion==3)//Eliminar evaluador
{
    $id = $_POST['id'];
    if($eva->eliminarEvaluador($id))
      echo "<script> alert (\"Se elimino la informacion del evaluador correctamente.\"); </script>";
    else
      echo "<script> alert (\"Error, no se permite eliminar la informacion del evaluador.\"); </script>";
    
echo "<script language=Javascript> location.href=\"../vistas/admin/evaluador\"; </script>";
die();
}


?>
