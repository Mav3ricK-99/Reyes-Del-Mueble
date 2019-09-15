$('#newsform').submit(function (e) 
	{
	event.preventDefault();
	var nombre=$("#nombre").val();
	var mail=$("#mail").val();
	var Enviar=$("#Enviar").val();
	if(nombre != "" && mail != "")
                {
					
					$.ajax({
                            url: 'includes/news.php',
                            type: 'POST',
                            dataType: 'html',
                            data: {nombre: nombre, mail: mail, Enviar:Enviar},
                        })
                        .done(function(resp)
                            {
                switch(resp)
					{
					case "0":{
						$(".np").html("No se han llenado los campos");
						};break;
					case "1":{
						$(".np").html("Alta con exito");
						};break;
					case "2":{
						$(".np").html("No corresponde al email del usuario");
						};break;
					case "3":{
						$(".np").html("Email enviado");
						};break;
					case "4":{window.location.href = 'https://reyesdelmueble1.000webhostapp.com/includes/loginform.php';};break;
					case "5":{
						$(".np").html("Usuario ya registrado en PinoNews");
						};break;
					case "6":{
						$(".np").html("Este email ya ha sido enviado, esperando confirmacion del usuario.");
						};break;
					default:$(".np").html("Hubo un problema al establecer la conexion con  el servidor, intente mas tarde");break;
							
					}
                })
						
                }
	 
});	
$('#newsform3').submit(function (e) 
	{
	event.preventDefault();
	var nombre=$("#nombre").val();
	var mail=$("#mail").val();
	var Enviar=$("#Enviar").val();
	if(nombre != "" && mail != "")
                {
					
					$.ajax({
                            url: '../news.php',
                            type: 'POST',
                            dataType: 'html',
                            data: {nombre: nombre, mail: mail, Enviar:Enviar},
                        })
                        .done(function(resp)
                            {
                switch(resp)
					{
					case "0":{
						$(".np").html("No se han llenado los campos");
						};break;
					case "1":{
						$(".np").html("Alta con exito");
						};break;
					case "2":{
						$(".np").html("No corresponde al email del usuario");
						};break;
					case "3":{
						$(".np").html("Email enviado");
						};break;
					case "4":{window.location.href = 'https://reyesdelmueble1.000webhostapp.com/includes/loginform.php';};break;
					case "5":{
						$(".np").html("Usuario ya registrado en PinoNews");
						};break;
					case "6":{
						$(".np").html("Este email ya ha sido enviado, esperando confirmacion del usuario.");
						};break;
					default:$(".np").html("Hubo un problema al establecer la conexion con  el servidor, intente mas tarde");break;
							
					}
                })
						
                }
	 
});	

function switchbaja(element)
{
	
	$("#conoce").text("Bien! es tu decision darte de baja cuando quieras, para continuar necesitamos el email registrado.");
	$("#baja").text("Ups.. Querias darte de alta a las news?, Haz click ");
	$("#baja").append("<a href='javascript:void(0)' Onclick='switchalta(this)'>aqui.</a>")
	$("#nombre").css("display","none");
	$("#mail").css("margin","5px");
	$("#mail").css("margin-left","0");
	$("#Enviar").prop('id', 'Enviarbaja');
	
}
function switchalta(element)
{
	
	$("#conoce").text("Conoce todas las ofertas e Informate de las ultimas novedades.");
	$("#baja").text("Quieres darte de baja de PinoNews? Haz click ");
	$("#baja").append("<a href='javascript:void(0)' Onclick='switchbaja(this)'>aqui.</a>")
	$("#nombre").css("display","inherit");
	$("#mail").css("margin","0");
	$("#Enviarbaja").prop('id', 'Enviar');
	
}

$(document).on('click','#Enviarbaja',function(){
	event.preventDefault();
	var mail=$("#mail").val();
	var Enviarbaja=$("#Enviarbaja").val();
	if(mail != "")
                {
					
					$.ajax({
                            url: 'includes/bajanews.php',
                            type: 'POST',
                            dataType: 'html',
                            data: {mail: mail, Enviarbaja:Enviarbaja},
                        })
                        .done(function(resp)
                            {
                switch(resp)
					{
						case "0":$(".np").html("El correo electronico ingresado no esta registrado al sistema Pnews.");break;
						case "1":$(".np").html("La cuenta ha sido dado de baja del sistema Pnews con exito.");break;
					}
					})
				
	}});











