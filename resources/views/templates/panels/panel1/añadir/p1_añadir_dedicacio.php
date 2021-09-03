<div class="p1-edit-box-1">
    <style>
        textarea{
            resize: none;
            outline: NONE;
            width: 100%;
            height: 50px;
        }
    </style>
    <?php
        use App\Models\Fase;
        use App\Models\Projecte;
use App\Models\Tasca;
use App\Models\Usuari;

?>
    <h1>Añadir Dedicacion</h1>
        <p>Descripcion</p>
        <textarea nores id="descripcion_p5_e1_1" cols="30" rows="10"></textarea>
        <p>Día</p>
        <input type="date" id="dia_p5_e1_1">
        <p>Hora</p>
        <input type="time" id="hora_p5_e1_1">
        <p>Horas</p>
        <input type="text" id="horas_p5_e1_1">
        <p>Usuario</p>
       <select id="usuario_p5_e1_1">
            <?php
                foreach(Usuari::all() as $usuari){ 
                    ?>
                        <option value="<?php echo $usuari->id; ?>"><?php echo $usuari->nom; ?></option>
                    <?php
                }
            ?>
       </select>

        <p>Tarea</p>
    
        <select id="tarea_p5_e1_1"> 
            <?php
                foreach(Tasca::all() as $tasca){ 
                    ?>
                        <option value="<?php echo $tasca->id; ?>"><?php echo $tasca->nom_tasca; ?></option>
                    <?php
                }
            ?>
       </select>


        <button class="btn" onclick="añadir_dedicacion_ajax()">Añadir</button>
    </div>
    <div class="box_to_destroy" onclick="close_c30()"> 

</div>