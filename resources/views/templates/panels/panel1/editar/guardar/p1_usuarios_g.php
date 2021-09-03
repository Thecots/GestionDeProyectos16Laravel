<?php
    use App\Models\Usuari;
    
    $usuari=Usuari::find($id);
    $usuari->nom=$nombre;
    $usuari->cognoms=$apellido;
    $usuari->save();

    echo 2;
?>
