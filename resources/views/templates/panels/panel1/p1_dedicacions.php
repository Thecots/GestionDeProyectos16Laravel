<div id="p1-table-usuaris">
<?php
    use App\Models\Usuari;
    use App\Models\Dedicacio;
    use App\Models\Tasca;

?>
<h2 class="p1-table-title" >Dedicaciones</h2>
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
        <th></th>
    </tr>
<?php
    foreach(Dedicacio::all() as $dedicacio){ 
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


        <td>
            <img class="btn-img" src="/img/delete.png" onclick="eliminar_dedicacio(<?php echo $dedicacio->id ;?>)"> 
        </td>
    </tr>
<?php
    }
?>
</table>
<button class="btn-añadir" onclick="añadir_dedicacio_get_box()">Añadir dedicacion</button>
</div>