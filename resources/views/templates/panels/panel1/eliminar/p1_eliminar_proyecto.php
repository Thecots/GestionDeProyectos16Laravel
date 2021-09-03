<?php
    use App\Models\Projecte;
    
    $usuari=Projecte::find($id);
    $usuari->delete();

    echo 2;
?>