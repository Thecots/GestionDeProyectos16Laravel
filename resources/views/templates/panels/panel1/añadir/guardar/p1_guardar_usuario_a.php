<?php
 use App\Models\Usuari;

 $usuari = new Usuari;

 $usuari->nom=$nombre;
 $usuari->cognoms=$apellido;

 $usuari->save();

echo 2;

?>
