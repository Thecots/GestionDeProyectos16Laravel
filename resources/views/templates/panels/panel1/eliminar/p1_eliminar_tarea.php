<?php
    use App\Models\Tasca;
    
    $usuari=Tasca::find($id);
    $usuari->delete();

    echo 2;
?>