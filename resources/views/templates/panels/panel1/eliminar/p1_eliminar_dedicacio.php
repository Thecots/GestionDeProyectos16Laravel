<?php
    use App\Models\Dedicacio;
    
    $usuari=Dedicacio::find($id);
    $usuari->delete();

    echo 2;
?>