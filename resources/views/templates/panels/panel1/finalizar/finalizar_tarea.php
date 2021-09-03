<?php
    use App\Models\Tasca;
    
    $usuari=Tasca::find($id);
    $usuari->data_fi_real= gmdate('Y-m-d h:i:s', time());
    $usuari->save();

    echo 2;
?>