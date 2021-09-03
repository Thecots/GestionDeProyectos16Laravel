<?php
    use App\Models\Fase;
    
    $usuari=Fase::find($id);
    $usuari->delete();

    echo 2;
?>
