<?php

/**
 * Description of evaluador
 *
 * @author Diana Caldeorn
 */
class evaluador {
   
    public $identificacion;
    public $nombre;
    public $apellido;    
    public $telefono;
    public $email;
    
    public function __construct() {        
    
    }


    public function buscarEvaluadorIdentificacion($id)
    {
        include 'conectar.php';
                
        $resultado = mysql_query('SELECT * FROM evaluador WHERE id_evaluador='.$id);
        $evaluadores= array();
         
        while($evaluador = mysql_fetch_assoc($resultado))
        {  $evaluadores[] = $evaluador;}
        
            if(sizeof($evaluadores)==0)
              {
                   $evaluadores[0]['identificacion']=0;
                   $evaluadores[1]['nombre']=0;
                   $evaluadores[2]['apellido']=0;
                   $evaluadores[3]['telefono']=0;
                   $evaluadores[4]['email']=0;
                   
                
        }
                
        mysql_close();   
 
        return $evaluadores[0];
    }
public function buscarEvaluadorPorCedula($identificacion)
    {
        include 'conectar.php';
                
        $resultado = mysql_query('SELECT * FROM evaluador WHERE identificacion='.$identificacion);
        $evaluadores= array();
         
        while($evaluador = mysql_fetch_assoc($resultado))
        {  $evaluadores[] = $evaluador;}
        
            if(sizeof($evaluadores)==0){
                   $evaluadores[0]['identificacion']=0;
                   $evaluadores[1]['nombre']=0;
                   $evaluadores[2]['apellido']=0;
                   $evaluadores[3]['telefono']=0;
                   $evaluadores[4]['email']=0;                  
            }
                
        mysql_close();   
 
        return $evaluadores[0];
    }
    
public function buscarEvaluadores()
    {
        include 'conectar.php';
        
        $resultado = mysql_query('SELECT * FROM `evaluador` ');
        $evaluadores= array();
 
        while($evaluador = mysql_fetch_assoc($resultado)){  
            $evaluadores[] = $evaluador;
        }
               
        mysql_close();   
 
        return $evaluadores;
    }
    
    public function eliminarEvaluador($id)
    {
        require 'conectar.php';
       
        $resultado = mysql_query('DELETE FROM evaluador WHERE id_evaluador='.$id);
        
        mysql_close();
        
        return true;
    }
    public function agregarEvaluador($evaluador)
    {
        include 'conectar.php';
        
        $resultado = mysql_query("INSERT INTO `evaluador` (`identificacion`, `nombre`, `apellido`, `telefono`, `email`) VALUES ('".$evaluador[0]."', '".$evaluador[1]."', '".$evaluador[2]."', '".$evaluador[3]."', '".$evaluador[4]."');");
                
        mysql_close();
        
        if($resultado==1)
            return true;
        
        return false;
    }
    public function editarEvaluador($id, $nuevoEvaluador)
    {
        include 'conectar.php';
      
        $resultado = mysql_query("UPDATE  `evaluador` SET  `identificacion` =  '".$nuevoEvaluador[0]."',`nombre` =  '".$nuevoEvaluador[1]."', `apellido` =  '".$nuevoEvaluador[2]."', `telefono` =  '".$nuevoEvaluador[3]."', `email` =  '".$nuevoEvaluador[4]."' WHERE `id_evaluador` =  '".$id."' LIMIT 1 ;");
        
        mysql_close();
        
     return true;
            
    }
    
}
?>
