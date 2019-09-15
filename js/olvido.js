$('#form44').submit(function (e) 
	{
	event.preventDefault();
	var email=$("#email").val();
	var enviar=$("#enviar").val();
	if(email != "")
                {
					
					$.ajax({
                            url: 'emailpass.php',
                            type: 'POST',
                            dataType: 'html',
                            data: {email: email, enviar: enviar},
                        })
                        .done(function(resp)
                            { 
                                if(resp == "0")
                                    {
										$('#error2').html("No se han encontrado usuarios con esta direccion de email O nombre de usuario.");
                                        $('#email').val('');
										$('#email').attr('placeholder' , "");
										
                                    }
                                else if(resp == "other")
                                    {
                                        console.log('Si estas viendo estos es porque algo sucedio y no se procesaron los datos del login, intentalo nuevamente.');
                                    }
                                else if(resp == "1")
                                    {
                                       $('#error2').html("Correo electronico enviado");
                                       
                                    }
								else if(resp == "3")
                                    {
                                       $('#error2').html("Se ha producido un error al enviar el mensaje, intentelo nuevamente");
                                       
                                    }
						         
                            })
						
                }
	 
});		
