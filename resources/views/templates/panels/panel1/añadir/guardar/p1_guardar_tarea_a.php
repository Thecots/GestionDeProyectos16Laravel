<?php
 use App\Models\Tasca;
 $usuari = new Tasca();
 $usuari->nom_tasca=$tarea;
 $usuari->projecte_id=$proyecto;
 $usuari->fase_id=$fase;
 $usuari->data_fi_estimat=$dataest;



 $usuari->save();

    echo 2;
?>
 