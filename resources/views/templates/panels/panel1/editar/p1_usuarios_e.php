<div class="p1-edit-box-1">
<?php
    use App\Models\Usuari;
    $usuari=Usuari::find($id);
?>
<h1>Editar Usuario</h1>
    <input type="hidden" value="<?php echo $id;?>" id="id_p1_e1">  
    <p>Nombre</p>
    <input type="text" value="<?php echo $usuari->nom?>" id="nombre_p1_e1">

    <p>Apellido</p>
    <input type="text" value="<?php echo $usuari->cognoms?>" id="apellido_p1_e1">

    <button class="btn" onclick="editar_usuario_ajax()">Editar</button>
</div>
<div class="box_to_destroy" onclick="close_c30()"> 

</div>