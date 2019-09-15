$('#cambiarp').submit(function (e) 
	{
	event.preventDefault();
	var pa=$("#pa").val();
	var pn1=$("#pn1").val();
	var pn2=$("#pn2").val();
	var camb=$("#camb").val();
	if(pa != "" && pn1 != "" && pn2 != "")
        {
					
				$.ajax({
                url: 'includes/accounts/cambiarpass.php',
                type: 'POST',
                dataType: 'html',
                data: {pa: pa, pn1: pn1, pn2:pn2, camb:camb},
                })
                .done(function(resp)
                {	
					switch(resp)
					{
					case "0":{
						$(".p").html("La nueva contraseña debe ser mayor a 6 caracteres.");
						};break;
					case "1":{
						$(".p").html("Se ha cambiado la contraseña.");
						window.location = 'https://reyesdelmueble1.000webhostapp.com/index.php';
						};break;
					case "2":{
						$(".p").html("Las contraseñas no coinciden.");
						};break;
					case "3":{
						$(".p").html("La contraseña actual no es correcta.");
						};break;
					default:$(".p").html("Hubo un problema al establecer la conexion con  el servidor, intente mas tarde");break;
							
					}
                                 
                })
						
         }	 
});	