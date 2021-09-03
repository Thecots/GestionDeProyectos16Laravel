<div class="p1-edit-box-1">
    <?php

use App\Models\Fase;
use App\Models\Projecte;
use App\Models\Tasca;
        $tarea=Tasca::find($id);
            // $proyecto=Projecte::find($tarea->projecte_id);
    ?>
    <h1>Editar Tarea</h1>
        <input type="hidden" value="<?php echo $id;?>" id="id_p4_e1">  
        <p>Tarea</p>
        <input type="text" value="<?php echo $tarea->nom_tasca?>" id="nombre_p4_e1">



        <p>Proyecto</p>
       <select id="proyecto_p4_e1" value="<?php echo $tarea->id; ?>">
            <?php
                foreach(Projecte::all() as $proyecto_s){ 
                    ?>
                        <option 
                        <?php
                            if($proyecto_s->id == $tarea->projecte_id){
                                echo "selected";
                            }
                        ?>

                        value="<?php echo $proyecto_s->id; ?>"><?php echo $proyecto_s->nom_projecte; ?></option>
                    <?php
                }
            ?>
       </select>

        <p>Fase</p>
    
        <select id="fase_p4_e1" value="<?php echo $tarea->id; ?>">
            <?php
                foreach(Fase::all() as $fase_s){ 
                    ?>
                        <option 
                        <?php
                            if($fase_s->id == $tarea->fase_id){
                                echo "selected";
                            }
                        ?>

                        value="<?php echo $fase_s->id; ?>"><?php echo $fase_s->nom_fase; ?></option>
                    <?php
                }
            ?>
       </select>


        <button class="btn" onclick="editar_tarea_ajax()">Editar</button>
    </div>
    <div class="box_to_destroy" onclick="close_c30()"> 

</div>