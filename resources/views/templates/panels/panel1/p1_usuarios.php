<div id="p1-table-usuaris">
<?php
    use App\Models\Usuari;
?>
<h2 class="p1-table-title">Usuaris</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Cognom</th>
        <th></th>
        <th></th>
    </tr>
<?php
    foreach(Usuari::all() as $usuari){ ?>
    <tr>
        <td><?php echo $usuari ->id?></td>
        <td><?php echo $usuari ->nom ?></td>
        <td><?php echo $usuari ->cognoms ?></td>
        <td>
            <img  class="btn-img" src="/img/edit.png"  onclick="editar_usuario(<?php echo $usuari->id ?>), usuari_e_show()">
        </td>
        <td>
            <img class="btn-img" src="/img/delete.png" onclick="eliminar_usuario(<?php echo $usuari->id?>)">
        </td>
    </tr>
<?php
    }
?>
</table>
<button class="btn-añadir" onclick="añadir_usuario_get_box()">Añadir usuario</button>
</div>

<div class="p1_editar_box">


</div>