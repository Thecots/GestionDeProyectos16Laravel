<?php
    use App\Models\Tasca;
    
    $projecte=Tasca::find($id);
    $projecte->nom_tasca=$tarea;
    $projecte->projecte_id=$proyecto;
    $projecte->fase_id=$fase;


    $projecte->save();

    echo 2;
?>
