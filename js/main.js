jQuery(document).on('submit' , '#validarFrm' , function(event){
    event.preventDefault();
    
    jQuery.ajax({
        url: 'login.php',
        type: 'POST',
        dataType: 'json',
        data: $(this).serialize(),
        beforeSend: function(){
            $('.boton').val('validando...');
            
        }
    })
    .done(function(respuesta) {
        console.log(respuesta);
        if(!respuesta.error){
            if(respuesta.tipo == '2'){
                location.href = 'Admin.php';
                
            }else if(respuesta.tipo == '1'){
                location.href = 'Tecnico.php';
            } 
        }else {
            $('.error').slideDown('slow');
            setTimeout(function(){
                $('.error').slideUp('slow');
            },3000);
            $('.boton').val('Ingresar');
        }
    })
    .fail(function(resp) {
        console.log(resp.responseText);
    })
    .always(function(){
        console.log("complete");
    });   
});