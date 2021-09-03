<?php  
     use App\Models\Dedicacio;

    if(isset($stat)){
        if($stat == 1){
            if($mes == 12){
                $mes = 1;
                $any++;
            }else{
                $mes++;
            }
        }else{
            if($mes == 1){
                $mes = 12;
                $any--;
            }else{
                $mes--;
            }
        }
        if(substr($mes, 0) < 10){
            $mes = "0".$mes;
        }
    }else{
        $mes=date('m');
        $any=date('Y');
        
    }

   
    $desp = date("N",strtotime("$any-$mes-01"));
    $desp--; 
    

    
    ?>

    <div class="change-YM-box">
        <img src="img/flecha.png" onclick="carregar_mes_anterior(<?php echo $mes.','.$any; ?>)">
        <p><?php echo date("M Y",strtotime("$any-$mes-01")); ?></p>
        <img src="img/flecha.png" onclick="carregar_mes_seguent(<?php echo $mes.','.$any; ?>)">
    </div>

    <table> 
        <tr><th>DL</th><th>DM</th><th>DM</th><th>DJ</th><th>DV</th><th>DS</th><th>DG</th></tr> <?php
            function hi_ha_hores_registrades($data){
    
                return Dedicacio::where('data',$data)->count() > 0; 
            }

            for($setmana=0; $setmana<=5; $setmana++){?>
                <tr> <?php
                        for($dia=1; $dia<=7; $dia++){?>
                            <td> <?php
                                $dia_mes = $setmana*7+$dia - $desp;
                                    if(checkdate($mes,$dia_mes,$any)){ 
                                        if(hi_ha_hores_registrades("$any-$mes-$dia_mes")) {
                                            $classe_div="amb_hores";
                                        }else{
                                            $classe_div="sense_hores";
                                        }

                                        if(substr($dia_mes, 0, 2) < 10){
                                            $dia_mes = "0".$dia_mes;
                                        }

                                        ?>
                                        <div class="dia-box dia <?php echo $classe_div ?>" onclick="tabla_horasa('<?php echo $any.'-'.$mes.'-'.$dia_mes; ?>')">
                                            <a href="#" ><?php echo $dia_mes; ?></a>
                                        </div>
                                        <?php
                                    } ?>
                            </td> <?php
                        }?>
                </td> <?php
            } ?>
    </table>