<?php
    use App\Models\Usuari;
    
    $usuari=Usuari::find($id);
    $usuari->delete();

    echo 2;
?>