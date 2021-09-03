<?php
    use App\Models\Projecte;
    
    $projecte=Projecte::find($id);
    $projecte->nom_projecte=$nombre;
    $projecte->save();

    echo 2;
?>
