<?php

/**
 * Description of facultad
 *
 * @author Diana Calderon
 */
class facultad {
   
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
         
        while($planEstudio = mysql_fetch_assoc($resultado))
        {  $planesEstudios[] = $planEstudio;}
              
        mysql_close();   
 
        return $planesEstudios;
    }
    
    
}
?>
