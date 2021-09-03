<div class="p2-title-h">
    <h1>
        <?php
            if(isset($fecha)){
                echo $fecha;
            }else{
                echo date("Y-m-d"); 
                $fecha = date("Y-m-d");
            }
        ?>
    </h1>
    <button class="btn-añadir" onclick="añadir_dedicacion_get_box('<?php echo $fecha; ?>')">
        Añadir
    </button>
</div>

<?php
       use App\Models\Usuari;
       use App\Models\Dedicacio;
       use App\Models\Tasca;

    if(!Dedicacio::where('data',$fecha)->count() > 0){
        ?>
        <div class="p2-error">
            <h1>No hay Dedicaciones</h1>
        </div>

        <?php
    }else{
        ?>

<table>
    <tr>
        <th>ID</th>
        <th>Data</th>
        <th>Hora</th>
        <th>Hores</th>
        <th>Descripcio</th>
        <th>Data de creación</th>
        <th>Última actualización</th>
        <th>Usuario</th>
        <th>Tasca</th>
    </tr>
<?php
    foreach (dedicacio::where("data", $fecha)->get() as $dedicacio) { 
        $usuari=Usuari::find($dedicacio->usuari_id);
        $tasca=Tasca::find($dedicacio->tasca_id);
        ?>
    
    <tr>
        <td><?php echo $dedicacio ->id?></td>
        <td><?php echo $dedicacio ->data ?></td>
        <td><?php echo $dedicacio ->hora ?></td>
        <td><?php echo $dedicacio ->hores ?></td>
        <td><?php echo $dedicacio ->descripcio ?></td>
        <td><?php echo $dedicacio ->created_at ?></td>
        <td><?php echo $dedicacio ->updated_at ?></td>
        <td><?php echo $usuari ->nom ?></td>
        <td><?php echo $tasca ->nom_tasca ?></td>

    </tr>
<?php
    }
?>
</table>

        <?php
    }

?>