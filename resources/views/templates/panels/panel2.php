<div class="p2-añadir-box" id="p2-añadir-box" >
</div>

<div id="plantilla2" class="plantilla dn">
    <div class="title">
        <h1>Calendario</h1>
    </div>
    <div class="p2-calendari">
       <div class="p2-contorno">
            <div id="set_calendario_here"></div>
       </div>
    </div>
    <div class="p2-tablas">
        <div id="set_table_here"></div>
    </div>
</div>

<script>




function calendario(){
    var xhr=new XMLHttpRequest();
        xhr.onreadystatechange = function(){
            if(this.readyState>2){
                
                document.getElementById("set_calendario_here").innerHTML=this.responseText;

            }
    
        };

        xhr.open("GET","calendario", true);
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xhr.send();

       
}


function carregar_mes_anterior(mes, any){
        
    var xhr=new XMLHttpRequest();
        xhr.onreadystatechange = function(){
            if(this.readyState>2){
                
                document.getElementById("set_calendario_here").innerHTML=this.responseText;

            }
    
        };
        stat=0;
        xhr.open("GET","calendario/"+mes+"/"+any+"/"+stat, true);
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xhr.send();
        }


        function carregar_mes_seguent(mes, any){
        
        var xhr=new XMLHttpRequest();
            xhr.onreadystatechange = function(){
                if(this.readyState>2){
                    
                    document.getElementById("set_calendario_here").innerHTML=this.responseText;
    
                }
        
            };
            stat = 1;
            xhr.open("GET","calendario/"+mes+"/"+any+"/"+stat, true);
            xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
            xhr.send();
            }



            function tabla_horas(){
            var xhr=new XMLHttpRequest();
            xhr.onreadystatechange = function(){
            if(this.readyState>2){
                
                document.getElementById("set_table_here").innerHTML=this.responseText;

            }
    
        };

        xhr.open("GET","horas", true);
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xhr.send();
        }
       

        function tabla_horasa(fecha){
            var xhr=new XMLHttpRequest();
            xhr.onreadystatechange = function(){
            if(this.readyState>2){
                
                document.getElementById("set_table_here").innerHTML=this.responseText;

            }
    
        };

              

        xhr.open("GET","horas/"+fecha, true);
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xhr.send();
        }


        function añadir_dedicacion_get_box(fecha){
            s_l_p2();
            var xhr=new XMLHttpRequest();
            xhr.onreadystatechange = function(){
            if(this.readyState>2){
                document.getElementById("p2-añadir-box").innerHTML=this.responseText;

            }
    
        };

        xhr.open("GET","get_box_add/"+fecha, true);
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xhr.send();
        }

        function o_l_p2(){
            $(".p2-añadir-box").css("display","none");
        }
        function s_l_p2(){
            $(".p2-añadir-box").css("display","flex");
        }


        


        function añadir_dedicacion_ajax2(fecha){
        var xhr=new XMLHttpRequest();
        xhr.onreadystatechange = function(){
            if(this.responseText == 2){
                o_l_p2();


                var mes = fecha.substring(5, 7);
                var any = fecha.substring(0, 4);

                var mes = parseInt(mes-1);

                carregar_mes_seguent(mes, any);
                tabla_horasa(fecha);
            }
    
        };
    
        descripcion = document.getElementById("descripcion_p6_e1_1").value;
        dia = document.getElementById("dia_p6_e1_1").value;
        hora = document.getElementById("hora_p6_e1_1").value;
        horas = document.getElementById("horas_p6_e1_1").value;
        usuario = document.getElementById("usuario_p6_e1_1").value;
        tarea = document.getElementById("tarea_p6_e1_1").value;

        xhr.open("GET","p1_guardar_dedicacion_a/"+descripcion+"/"+dia+"/"+hora+"/"+horas+"/"+usuario+"/"+tarea, true);
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xhr.send();


    }



    
</script>