<div id="plantilla1" class="plantilla df">
    <div class="title">
        <h1>Dashboard</h1>
    </div>

    <div class="p1-nums" id="p1-nums">
 
    </div>
    <div class="p1-tables-box" id="p1-tables-box">
        
    </div>
    <div class="edit-34531" id="edit-34531">

    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

// START FUNCTIONS
window.onload = function() {
    tabla();
    p1_usuarios();
    calendario();
    tabla_horas();
    
};



// GET TABLES *

 function tabla(){
        var xhr=new XMLHttpRequest();
        xhr.onreadystatechange = function(){
            if(this.readyState>2){
                document.getElementById("p1-nums").innerHTML=this.responseText;
            }
    
        };
        xhr.open("GET","contadores", true);
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xhr.send();
    }

    function p1_usuarios(){
        var xhr=new XMLHttpRequest();
        xhr.onreadystatechange = function(){
            if(this.readyState>2){
                document.getElementById("p1-tables-box").innerHTML=this.responseText;
            }
    
        };
        xhr.open("GET","p1_usuarios", true);
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xhr.send();
    }

    function p1_proyecto(){
        var xhr=new XMLHttpRequest();
        xhr.onreadystatechange = function(){
            if(this.readyState>2){
                document.getElementById("p1-tables-box").innerHTML=this.responseText;
            }
    
        };
        xhr.open("GET","p1_proyecto", true);
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xhr.send();
    }


    function p1_fase(){
        var xhr=new XMLHttpRequest();
        xhr.onreadystatechange = function(){
            if(this.readyState>2){
                document.getElementById("p1-tables-box").innerHTML=this.responseText;
            }
    
        };
        xhr.open("GET","p1_fase", true);
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xhr.send();
    }

    function p1_dedicacions(){
        var xhr=new XMLHttpRequest();
        xhr.onreadystatechange = function(){
            if(this.readyState>2){
                document.getElementById("p1-tables-box").innerHTML=this.responseText;
            }
    
        };
        xhr.open("GET","p1_dedicacions", true);
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xhr.send();
    }


    function p1_tarea(){
        var xhr=new XMLHttpRequest();
        xhr.onreadystatechange = function(){
            if(this.readyState>2){
                document.getElementById("p1-tables-box").innerHTML=this.responseText;
            }
    
        };
        xhr.open("GET","p1_tarea", true);
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xhr.send();
    }



// GET  EDITAR BOX AJAX
function editar_usuario(id){
        var xhr=new XMLHttpRequest();
        xhr.onreadystatechange = function(){
            if(this.readyState>2){
                document.getElementById("edit-34531").innerHTML=this.responseText;
                usuari_e_show()
            }
    
        };
        xhr.open("GET","p1_usuarios_e/"+id, true);
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xhr.send();
    }

    function editar_proyecto(id){
        var xhr=new XMLHttpRequest();
        xhr.onreadystatechange = function(){
            if(this.readyState>2){
                document.getElementById("edit-34531").innerHTML=this.responseText;
                usuari_e_show()
            }
    
        };
        xhr.open("GET","p1_proyectos_e/"+id, true);
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xhr.send();
    }

    function editar_fase(id){
        var xhr=new XMLHttpRequest();
        xhr.onreadystatechange = function(){
            if(this.readyState>2){
                document.getElementById("edit-34531").innerHTML=this.responseText;
                usuari_e_show()
            }
    
        };
        xhr.open("GET","p1_fase_e/"+id, true);
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xhr.send();
    }
    
    function editar_tarea(id){
        var xhr=new XMLHttpRequest();
        xhr.onreadystatechange = function(){
            if(this.readyState>2){
                document.getElementById("edit-34531").innerHTML=this.responseText;
                usuari_e_show()
            }
    
        };
        xhr.open("GET","p1_tarea_e/"+id, true);
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xhr.send();
    }

    
// COMMANDSZX

function usuari_e_show(){
    $(".edit-34531").css("display","flex");
}

function close_c30(){
    $(".edit-34531").css("display","none");

}



 // EDITAR AJAX GUARDAR
 function editar_usuario_ajax(){
        var xhr=new XMLHttpRequest();
        xhr.onreadystatechange = function(){
            if(this.responseText == 2){
                close_c30();
                tabla();
                p1_usuarios();
            }
    
        };
    
        id = document.getElementById("id_p1_e1").value;
        nombre = document.getElementById("nombre_p1_e1").value;
        apellido = document.getElementById("apellido_p1_e1").value;

        xhr.open("GET","p1_usuarios_g/"+id+"/"+nombre+"/"+apellido, true);
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xhr.send();
    }

    function editar_proyecto_ajax(){
        var xhr=new XMLHttpRequest();
        xhr.onreadystatechange = function(){
            if(this.responseText == 2){
                close_c30();
                tabla();
                p1_proyecto();
            }
        };
    
        id = document.getElementById("id_p2_e1").value;
        nombre = document.getElementById("nombre_p2_e1").value;

        
        xhr.open("GET","p1_proyecto_g/"+id+"/"+nombre, true);
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xhr.send();
    }

    function editar_fase_ajax(){
        var xhr=new XMLHttpRequest();
        xhr.onreadystatechange = function(){
            if(this.responseText == 2){
                close_c30();
                tabla();
                p1_fase();
            }
        };
    
        id = document.getElementById("id_p3_e1").value;
        fase = document.getElementById("nombre_p3_e1").value;

        
        xhr.open("GET","p1_fase_g/"+id+"/"+fase, true);
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xhr.send();
    }
    
    function editar_tarea_ajax(){
        var xhr=new XMLHttpRequest();
        xhr.onreadystatechange = function(){
            if(this.responseText == 2){
                close_c30();
                tabla();
                p1_tarea();
            }
        };
    
        id = document.getElementById("id_p4_e1").value;
        tarea = document.getElementById("nombre_p4_e1").value;
        proyecto = document.getElementById("proyecto_p4_e1").value;
        fase = document.getElementById("fase_p4_e1").value;

        
        xhr.open("GET","p1_tarea_g/"+id+"/"+tarea+"/"+proyecto+"/"+fase, true);
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xhr.send();
    }
    


    
// ELIMINAR AJAX


function eliminar_usuario(id){
    var xhr=new XMLHttpRequest();
        xhr.onreadystatechange = function(){
            if(this.responseText == 2){
                tabla();
                p1_usuarios();
            }
    
        };

        xhr.open("GET","p1_eliminar_usuario/"+id, true);
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xhr.send();


}


function eliminar_proyecto(id){
    var xhr=new XMLHttpRequest();
        xhr.onreadystatechange = function(){
            if(this.responseText == 2){
                tabla();
                p1_proyecto();
            }
    
        };

        xhr.open("GET","p1_eliminar_proyecto/"+id, true);
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xhr.send();


}


function eliminar_fase(id){
    var xhr=new XMLHttpRequest();
        xhr.onreadystatechange = function(){
            if(this.responseText == 2){
                tabla();
                p1_fase();
            }
    
        };

        xhr.open("GET","p1_eliminar_fase/"+id, true);
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xhr.send();


}

function eliminar_tarea(id){
    var xhr=new XMLHttpRequest();
        xhr.onreadystatechange = function(){
            if(this.responseText == 2){
                tabla();
                p1_tarea();
            }
    
        };

        xhr.open("GET","p1_eliminar_tarea/"+id, true);
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xhr.send();

}

function eliminar_dedicacio(id){
    var xhr=new XMLHttpRequest();
        xhr.onreadystatechange = function(){
            if(this.responseText == 2){
                p1_dedicacions();
                tabla();
            }
    
        };

        xhr.open("GET","p1_eliminar_dedicacio/"+id, true);
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xhr.send();

       
}


// GET AÑADIR BOX AJAX

function añadir_usuario_get_box(){
        var xhr=new XMLHttpRequest();
        xhr.onreadystatechange = function(){
            if(this.readyState>2){
                document.getElementById("edit-34531").innerHTML=this.responseText;
            }
    
        };
        xhr.open("GET","p1_añadir_usuario", true);
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xhr.send();
        usuari_e_show();
      
    

    }

    function añadir_proyecto_get_box(){
        var xhr=new XMLHttpRequest();
        xhr.onreadystatechange = function(){
            if(this.readyState>2){
                document.getElementById("edit-34531").innerHTML=this.responseText;
            }

        };
        xhr.open("GET","p1_añadir_proyecto", true);
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xhr.send();
        usuari_e_show();

       

}

function añadir_fase_get_box(){
        var xhr=new XMLHttpRequest();
        xhr.onreadystatechange = function(){
            if(this.readyState>2){
                document.getElementById("edit-34531").innerHTML=this.responseText;
            }

        };
        xhr.open("GET","p1_añadir_fase", true);
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xhr.send();
        usuari_e_show();      

}

function añadir_tarea_get_box(){
        var xhr=new XMLHttpRequest();
        xhr.onreadystatechange = function(){
            if(this.readyState>2){
                document.getElementById("edit-34531").innerHTML=this.responseText;
            }

        };
        xhr.open("GET","p1_añadir_tarea", true);
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xhr.send();
        usuari_e_show();
}

function añadir_dedicacio_get_box(){
        var xhr=new XMLHttpRequest();
        xhr.onreadystatechange = function(){
            if(this.readyState>2){
                document.getElementById("edit-34531").innerHTML=this.responseText;
            }

        };
        xhr.open("GET","p1_añadir_dedicacio", true);
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xhr.send();
        usuari_e_show();
}

// GUARDAR AÑADIR AJAX

function añadir_usuario_ajax(){
        var xhr=new XMLHttpRequest();
        xhr.onreadystatechange = function(){
            if(this.responseText == 2){
                close_c30();
                tabla();
                p1_usuarios();

            }
    
        };
    
        nombre = document.getElementById("nombre_p1_e1_1").value;
        apellido = document.getElementById("apellido_p1_e1_1").value;

        xhr.open("GET","p1_guardar_usuario_a/"+nombre+"/"+apellido, true);
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xhr.send();

        
    }

    function añadir_proyecto_ajax(){
        var xhr=new XMLHttpRequest();
        xhr.onreadystatechange = function(){
            if(this.responseText == 2){
                close_c30();
                tabla();
                p1_proyecto();
            }
    
        };
    
        proyecto = document.getElementById("nombre_p1_e2_1").value;

        xhr.open("GET","p1_guardar_proyecto_a/"+proyecto, true);
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xhr.send();


    }

    function añadir_fase_ajax(){
        var xhr=new XMLHttpRequest();
        xhr.onreadystatechange = function(){
            if(this.responseText == 2){
                close_c30();
                tabla();
                p1_fase();
            }
    
        };
    
        proyecto = document.getElementById("nombre_p1_e3_1").value;

        xhr.open("GET","p1_guardar_fase_a/"+proyecto, true);
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xhr.send();


    }


    function añadir_tarea_ajax(){
        var xhr=new XMLHttpRequest();
        xhr.onreadystatechange = function(){
            if(this.responseText == 2){
                close_c30();
                tabla();
                p1_tarea();
            }
    
        };
    
        tarea = document.getElementById("tarea_p4_e1_1").value;
        proyecto = document.getElementById("proyecto_p4_e1_1").value;
        fase = document.getElementById("fase_p4_e1_1").value; 
        dataest = document.getElementById("finest_p4_e1_1").value;
        xhr.open("GET","p1_guardar_tarea_a/"+tarea+"/"+proyecto+"/"+fase+"/"+dataest, true);
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xhr.send();


    }

    function añadir_dedicacion_ajax(){
        var xhr=new XMLHttpRequest();
        xhr.onreadystatechange = function(){
            if(this.responseText == 2){
                close_c30();
                tabla();
                p1_dedicacions();
            }
    
        };
    
        descripcion = document.getElementById("descripcion_p5_e1_1").value;
        dia = document.getElementById("dia_p5_e1_1").value;
        hora = document.getElementById("hora_p5_e1_1").value;
        horas = document.getElementById("horas_p5_e1_1").value;
        usuario = document.getElementById("usuario_p5_e1_1").value;
        tarea = document.getElementById("tarea_p5_e1_1").value;

        xhr.open("GET","p1_guardar_dedicacion_a/"+descripcion+"/"+dia+"/"+hora+"/"+horas+"/"+usuario+"/"+tarea, true);
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xhr.send();


    }


    
    // FINALIZAR TAREA

    

    function finalizar_tarea(id){
    var xhr=new XMLHttpRequest();
        xhr.onreadystatechange = function(){
            if(this.responseText == 2){
                p1_tarea();
                tabla();
            }
    
        };

        xhr.open("GET","finalizar_tarea/"+id, true);
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xhr.send();

       
}



</script>