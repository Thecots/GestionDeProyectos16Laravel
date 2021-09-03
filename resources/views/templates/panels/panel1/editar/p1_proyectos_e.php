<div class="p1-edit-box-1">
    <?php
        use App\Models\Projecte;
        $proyecto=Projecte::find($id);
    ?>
    <h1>Editar Proyecto</h1>
        <input type="hidden" value="<?php echo $id;?>" id="id_p2_e1">  
        <p>Proyecto</p>
        <input type="text" value="<?php echo $proyecto->nom_projecte?>" id="nombre_p2_e1">

        <!-- <p>Data creacion</p>
        <input type="datetime" readonly value="<?php echo $proyecto->created_at?>" id="craeted_p2_e1">

        <p>Última actualización</p>
        <input type="datetime" readonly value="<?php echo $proyecto->updated_at?>" id="updated_p2_e1"> -->

        <button class="btn" onclick="editar_proyecto_ajax()">Editar</button>
    </div>
    <div class="box_to_destroy" onclick="close_c30()"> 

</div>