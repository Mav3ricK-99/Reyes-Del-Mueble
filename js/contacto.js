$('#contact_form').submit(function (e) 
	{
	event.preventDefault();
	var n=$("#n").val();
	var a=$("#a").val();
	var e=$("#e").val();
	var t=$("#t").val();
	var s=$("#s").val();
	var m=$("#m").val();
	var enviar=$("#enviar").val();
	if(s != "0") 
		{
			if(n != "" && a != "" && e != "" && t != "" && s != "" && m != "")
                {
					
					$.ajax({
                            url: 'includes/contacto.php',
                            type: 'POST',
                            dataType: 'html',
                            data: {n:n, a: a, e: e, t:t, s:s, m:m, enviar:enviar},
                        })
                        .done(function(resp)
                            {
              			switch(resp)
					{
						case "0":{
						$("#respuesta").html("Hubo un problema al enviar el mensaje, intentalo mas tarde.");};break;
						case "1":{
						$("#respuesta").html("Mensaje enviado con exito, mas tarde el equipo de Reyes del Pino le respondera al Email");};break;
							
						default: console.log('default xd');
					}
     })
						
                }
		}
	else{
		$("#respuesta").html("El asunto debe especificarse.");
	}
	
});
