<?php
 use App\Models\Dedicacio;

 $usuari = new Dedicacio();


 
 $usuari->data=$dia;
 $usuari->hora=$hora;
 $usuari->hores=$horas;
 $usuari->descripcio=$descripcion;
 $usuari->usuari_id=$usuario;
 $usuari->tasca_id=$tarea;

 $usuari->save();

echo 2;
?>