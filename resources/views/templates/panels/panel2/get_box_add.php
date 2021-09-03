<div class="p1-edit-box-1">
    <style>
        textarea{
            resize: none;
            outline: NONE;
            width: 100%;
            height: 50px;
            
        }
        .p1-edit-box-1{
            z-index: 1;
        }
    </style>
    <?php

use App\Models\Tasca;
use App\Models\Usuari;

?>
    <h1>Añadir Dedicacion</h1>
        <p>Descripcion</p>
        <textarea nores id="descripcion_p6_e1_1" cols="30" rows="10"></textarea>
        <p>Día</p>
        <input type="date" value="<?php echo $fecha;?>" id="dia_p6_e1_1">
        <p>Hora</p>
        <input type="time" id="hora_p6_e1_1">
        <p>Horas</p>
        <input type="text" id="horas_p6_e1_1">
        <p>Usuario</p>
       <select id="usuario_p6_e1_1">
            <?php
                foreach(Usuari::all() as $usuari){ 
                    ?>
                        <option value="<?php echo $usuari->id; ?>"><?php echo $usuari->nom; ?></option>
                    <?php
                }
            ?>
       </select>

        <p>Tarea</p>
    
        <select id="tarea_p6_e1_1"> 
            <?php
                foreach(Tasca::all() as $tasca){ 
                    ?>
                        <option value="<?php echo $tasca->id; ?>"><?php echo $tasca->nom_tasca; ?></option>
                    <?php
                }
            ?>
       </select>


        <button class="btn" onclick="añadir_dedicacion_ajax2('<?php echo $fecha;?>')">Añadir</button>
    </div>
    <div class="box_to_destroy" onclick="o_l_p2()"> 
