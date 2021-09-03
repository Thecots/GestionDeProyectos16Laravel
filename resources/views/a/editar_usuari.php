<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar usuari</title>
    <link rel="stylesheet" href="/css/global.css">
    <link rel="stylesheet" href="/css/editar_usuari.css">

</head>
<body>
    <?php
        use App\Models\Usuari;
        $usuari = Usuari::find($id);
    ?>

    <div class="box">
        <form action="/gravar_edicio_usuari">
            <div class="title">
                <h1>EDITAR USUARIO</h1>
            </div>
            <div class="nom">
                <input type="hidden" id="id" name="id" value="<?php echo $id?>">
                <label for="nom">Nom:</label><input type="text" id="nom" value="<?php echo $usuari->nom?>">
            </div>
            <div class="cognom">
                <input type="hidden" id="id" name="id" value="<?php echo $id?>">
                <label for="cognoms">Cognoms:</label><input type="text" id="cognoms" value="<?php echo $usuari->cognoms?>">
            </div>
            <input type="submit" value="Guardar" class="btn">
        </form>
    </div>

</body>
</html>