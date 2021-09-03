<?php
    use App\Models\Fase;
    
    $projecte=Fase::find($id);
    $projecte->nom_fase=$fase;
    $projecte->save();

    echo 2;
?>
