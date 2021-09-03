<?php
    use App\Models\Usuari;

    $usuari = Usuari::find($id);
    // $usuari = new Usuari; Para crear un usuari nuevo.
    $usuari->nom=$nom;
    $usuari->cognom=$cognom;
    $usuari->save();


    
?>
<h3>Dades guardades correctament</h3>
<a href="usuaris">Volver</a>