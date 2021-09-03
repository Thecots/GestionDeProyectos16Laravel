<?php
    use App\Models\Dedicacio;
    use App\Models\Tasca;
    use App\Models\Projecte;
?>
<h2>Hores registrades data <?php echo "$ data"?></h2>
<table>
    <tr>
        <th>Data</th>
        <th>Hores</th>
        <th>Projecte</th>
        <th>Tasca</th>
    </tr>
    <?php
    foreach(Dedicacio::where("data,"$data)->get() as $dedicacio){
        
    }
    ?>
</table>