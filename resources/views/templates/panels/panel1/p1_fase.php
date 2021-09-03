<div id="p1-table-usuaris">
<?php
    use App\Models\Fase;
?>
<h2 class="p1-table-title">Fase</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Fase</th>
        <th>Data de creación</th>
        <th>Última actualización</th>
        <th></th>
        <th></th>
    </tr>
<?php
    foreach(Fase::all() as $fase){ ?>
    <tr>
        <td><?php echo $fase ->id ?></td>
        <td><?php echo $fase ->nom_fase ?></td>
        <td><?php echo $fase ->created_at ?></td>
        <td><?php echo $fase ->updated_at ?></td>

        <td>
        <img src="/img/edit.png"  class="btn-img" onclick="editar_fase(<?php echo $fase->id; ?>)">
    </td>
        <td>
            <img src="/img/delete.png"  class="btn-img" onclick=" eliminar_fase(<?php echo $fase->id; ?>)">
        </td>
    </tr>
<?php
    }
?>
</table>
<button class="btn-añadir" onclick="añadir_fase_get_box()">Añadir fase</button>
</div>