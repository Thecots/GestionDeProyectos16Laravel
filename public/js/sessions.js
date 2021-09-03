$(function(){
    count_visits();
});

$('#login').click(function(){
    $( "#inicio" ).removeClass( "df" ).addClass( "dn" );
    $( "#login_windows" ).removeClass( "dn" ).addClass( "df" );

    $('#error_campos').css('display','none');
    $('#error_user').css('display','none');
});

$('#volver').click(function(){
    $( "#login_windows" ).removeClass( "df" ).addClass( "dn" );
    $( "#inicio" ).removeClass( "dn" ).addClass( "df" );

    $('#login_windows input').val('');
});

  
$('#iniciar_ss').click(function(){
    $('#error_campos').css('display','none');
    $('#error_user').css('display','none');
    validar();
});


function validar(){
    const postData = {
        username:  $('#username').val(),
        passwd:  $('#passwd').val()
    };
    $.post('app/session/login.php',postData, function(response) { 
        if(response == 0){
            $('#error_campos').css('display','block');
        }else if(response == 1){
            $('#error_user').css('display','block'); 
        }else if(response == 1 || response == 2){
            $('#error_user').css('display','block'); 
        }else if(response == 3){
            location.href = 'dashboard.php';
        }
    })
}

function count_visits(){
    $.post('app/session/contador.php', function(response) { 
        console.log(response);
    })
}