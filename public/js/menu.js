$(function(){
    $( "#menu_option_1 img" ).addClass( "active" );
    $( "#menu_option_1" ).addClass( "active" );


});


function menu(a){
    ocultar_menu();
    if(a == 1){
        $( "#menu_option_1 img" ).addClass( "active" );
        $( "#menu_option_1" ).addClass( "active" );
        $( "#plantilla1").removeClass( "dn").addClass("df"); // HOME

    }else if(a == 2){
        $( "#menu_option_2 img" ).addClass( "active" );
        $( "#menu_option_2" ).addClass( "active" );
        $( "#plantilla2").removeClass( "dn").addClass("df"); // PROYECTOS

    }else if(a == 3){
        $( "#menu_option_3 img" ).addClass( "active" );
        $( "#menu_option_3" ).addClass( "active" );
        $( "#plantilla3").removeClass( "dn").addClass("df"); // USUARIOS

    }else if(a == 4){
        $( "#menu_option_4 img" ).addClass( "active" );
        $( "#menu_option_4" ).addClass( "active" );
        $( "#plantilla4").removeClass( "dn").addClass("df"); // HISTORIAL

    }else{
        console.log('function menu() = error')
    }

}
function ocultar_menu(){
    $( "#menu_option_1").removeClass( "active" );
    $( "#menu_option_1 img").removeClass( "active" );

    $( "#menu_option_2").removeClass( "active" );
    $( "#menu_option_2 img").removeClass( "active" );

    $( "#menu_option_3").removeClass( "active" );
    $( "#menu_option_3 img").removeClass( "active" );

    $( "#menu_option_4").removeClass( "active" );
    $( "#menu_option_4 img").removeClass( "active" );

    $( "#menu_option_4").removeClass( "active" );
    $( "#menu_option_4 img").removeClass( "active" );

    $( "#plantilla1").removeClass( "df").addClass("dn"); // HOME
    $( "#plantilla2").removeClass( "df").addClass("dn"); // PROYECTOS
    $( "#plantilla3").removeClass( "df").addClass("dn"); // USUARIOS
    $( "#plantilla4").removeClass( "df").addClass("dn"); // HISTORIAL

    
}