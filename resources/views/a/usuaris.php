<?php
    use App\Models\Usuari;
?>
<h2>Llista usuaris</h2>
<table>
    <tr>
        <th>Nom</th>
        <th>Cognom</th>
        <th></th>
    </tr>
<?php
    foreach(Usuari::all() as $usuari){ ?>
    <tr>
        <td><?php echo $usuari ->nom ?></td>
        <td><?php echo $usuari ->cognoms ?></td>
        <td>
            <a href="/editar_usuari/<?php echo $usuari->id?>">Editar</a>
        </td>
        <td>
            <a href="/eliminar_usuari/<?php echo $usuari->id?>">Eliminar</a>
        </td>
    </tr>
<?php
    }
?>
</table>
<a href="/afegir_usuari">Añadir usuario</a>
<a href="/menu">Menu</a>

