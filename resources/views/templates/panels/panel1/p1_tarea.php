<div id="p1-table-usuaris">
<?php
    use App\Models\Tasca;
    use App\Models\Projecte;
    use App\Models\Fase;


?>
<h2 class="p1-table-title">Tarea</h2>
<table>
    <tr>
        <th>id</th>
        <th>Tarea</th>
        <th>Data de creación</th>
        <th>Última actualización</th>
        <th>Proyecto</th>
        <th>Fase</th>
        <th>Data inicio</th>
        <th>Data fin estiamada</th>
        <th>Data fin real</th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
<?php
    foreach(Tasca::all() as $tarea){ 
        $proyecto=Projecte::find($tarea->projecte_id);
        $fase=Fase::find($tarea->fase_id);
        ?>
    <tr>
        <td><?php echo $tarea ->id ?></td>
        <td><?php echo $tarea ->nom_tasca ?></td>
        <td><?php echo $tarea ->created_at ?></td>
        <td><?php echo $tarea ->updated_at ?></td>
        <td><?php echo $proyecto ->nom_projecte ?></td>
        <td><?php echo $fase ->nom_fase ?></td>
        <td><?php echo $tarea ->data_inici ?></td>
        <td><?php echo $tarea ->data_fi_estimat ?></td>
        <td><?php echo $tarea ->data_fi_real ?></td>

        <td>
            <img src="/img/edit.png"  class="btn-img" onclick="editar_tarea(<?php echo $tarea->id; ?>)">
        </td>
        <td>
         <img src="/img/finish.png"  class="btn-img" onclick="finalizar_tarea(<?php echo $tarea->id; ?>)">
        </td>
        <td>
         <img src="/img/delete.png"  class="btn-img" onclick="eliminar_tarea(<?php echo $tarea->id; ?>)">
        </td>

    </tr>
<?php
    }
?>
</table>
<button class="btn-añadir" onclick="añadir_tarea_get_box()">Añadir tarea</button>
</div>
