<?php

/**
 * Description of plan Estudio
 *
 * @author Curso Profundización
 */
class PlanEstudio {
   
    public $id_plan;
    public $nombre;
    public $id_facultad;
    
    public function __construct() {
    }


public function listarPlanEstudioFacultad($id)
    {
        include 'conectar.php';
                
        $resultado = mysql_query('SELECT * FROM plan_estudio WHERE id_facultad='.$id);
        $planesEstudios= array();
         
        while($plan = mysql_fetch_assoc($resultado))
        {  $planesEstudios[] = $plan;}
              
        mysql_close();   
 
        return $planesEstudios;
    }
    
    
}
?>
