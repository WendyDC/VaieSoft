<label for="exampleInputEmail1">Disciplinas:<span title="Campo Obligatorio" style="color: red; font-size: 12pt;">*</span></label>
                        
<select name="idPlanEstudio" id="idPlanEstudio" data-rel="chosen">
    <option value=""></option>                               
<?php
    $id=$_POST['q'];
    require "../../model/planEstudio.php";
    $plan = new planEstudio();
    $planesEstudios=$plan->listaFacultad($id);
    foreach($planesEstudios as $p): 
    echo '<option value="'.$p['id_facultad'].'">'.$p['nombre'].'</option>';
    endforeach;
    ?>
 </select> 


