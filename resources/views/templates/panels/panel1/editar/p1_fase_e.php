<div class="p1-edit-box-1">
    <?php
        use App\Models\Fase;
        $fase=Fase::find($id);
    ?>
    <h1>Editar Fase</h1>
        <input type="hidden" value="<?php echo $id;?>" id="id_p3_e1">  
        <p>Fase</p>
        <input type="text" value="<?php echo $fase->nom_fase?>" id="nombre_p3_e1">
<!-- 
        <p>Data creacion</p>
        <input type="datetime" readonly value="<?php echo $fase->created_at?>" id="craeted_p2_e1">

        <p>Última actualización</p>
        <input type="datetime" readonly value="<?php echo $fase->updated_at?>" id="updated_p2_e1"> -->

        <button class="btn" onclick="editar_fase_ajax()">Editar</button>
    </div>
    <div class="box_to_destroy" onclick="close_c30()"> 

</div>