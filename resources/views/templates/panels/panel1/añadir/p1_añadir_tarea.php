<div class="p1-edit-box-1">
    <?php
        use App\Models\Fase;
        use App\Models\Projecte;

    ?>
    <h1>Añadir Tarea</h1>
        <p>Tarea</p>
        <input type="text"  id="tarea_p4_e1_1">



        <p>Proyecto</p>
       <select id="proyecto_p4_e1_1">
            <?php
                foreach(Projecte::all() as $proyecto_s){ 
                    ?>
                        <option value="<?php echo $proyecto_s->id; ?>"><?php echo $proyecto_s->nom_projecte; ?></option>
                    <?php
                }
            ?>
       </select>

        <p>Fase</p>
    
        <select id="fase_p4_e1_1">
            <?php
                foreach(Fase::all() as $fase_s){ 
                    ?>
                        <option value="<?php echo $fase_s->id; ?>"><?php echo $fase_s->nom_fase; ?></option>
                    <?php
                }
            ?>
       </select>

        <p>Fin estimado</p>
        <input type="date" id="finest_p4_e1_1">
        <button class="btn" onclick="añadir_tarea_ajax()">Añadir</button>
    </div>
    <div class="box_to_destroy" onclick="close_c30()"> 

</div>