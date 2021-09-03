$('#cerrar_session').click(function(){
    validar();
});

function validar(){
    $.post('app/session/cerrar_session.php', function(response) { 
        if(response == 0){
            location.href = 'index.php';
        }
    })
}
