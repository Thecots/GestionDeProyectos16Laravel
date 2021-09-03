<div id="p1-table-usuaris">
<?php
    use App\Models\Projecte;
?>
<h2 class="p1-table-title">Proyecto</h2>
<table>
    <tr>
        <th>id</th>
        <th>Proyecto</th>
        <th>Data de creación</th>
        <th>Última actualización</th>
        <th></th>
        <th></th>
    </tr>
<?php
    foreach(Projecte::all() as $proyecto){ ?>
    <tr>
        <td><?php echo $proyecto ->id ?></td>
        <td><?php echo $proyecto ->nom_projecte ?></td>
        <td><?php echo $proyecto ->created_at ?></td>
        <td><?php echo $proyecto ->updated_at ?></td>

        <td>
            <img src="/img/edit.png"  class="btn-img" onclick="editar_proyecto(<?php echo $proyecto->id; ?>)">
        </td>
        <td>
            <img src="/img/delete.png"  class="btn-img" onclick="eliminar_proyecto(<?php echo $proyecto->id; ?>)">
        </td>
    </tr>
<?php
    }
?>
</table>
<button class="btn-añadir" onclick="añadir_proyecto_get_box()">Añadir Proyecto</button>
</div>