$('#regform').submit(function (e) 
	{
	event.preventDefault();
	var nombre=$("#nombre").val();
	var nombrer=$("#nombrer").val();
	var email=$("#email").val();
	var passwordr1=$("#passwordr1").val();
	var passwordr2=$("#passwordr2").val();
	var fechan=$("#fechan").val();
	if ($('#chkk').is(":checked"))
	{var chkk=1;}
	else {var chkk=0;}
	var regis=$("#regis").val();
	if(fechan != "" && nombre != "" && nombrer != "" && email != "" && passwordr1 != "" && passwordr2 != "")
                {
					
					$.ajax({
                            url: 'accounts/reg.php',
                            type: 'POST',
                            dataType: 'html',
                            data: {nombre:nombre, nombrer: nombrer, email: email, passwordr1:passwordr1, passwordr2:passwordr2, fechan:fechan, chkk:chkk, regis:regis},
                        })
                        .done(function(resp)
                            {
              switch(resp)
		{
		case "10":{$("#error").html("Se ha enviado el correo de confirmacion").addClass("errors");};break;
		case "1":{$("#error").html("Hubo un problema").addClass("errors");};break;
		case "2":{$("#error").html("Sitio para mayores de 18 años").addClass("errors");};break;
		case "3":{$("#error").html("Las contraseñas no coinciden").addClass("errors");};break;
		case "4":{$("#error").html("Ya esta registrado").addClass("errors");};break;
		case "5":{$("#error").html("Ya esta en tabla registros").addClass("errors");};break;
		case "6":{$("#error").html("Contraseña debe ser mayor a 6 caracteres").addClass("errors");};break;
		default:{$("#error").html("Se ha enviado el correo de confirmacion").addClass("errorres");
				$("#nombrer").val('');
				$("#nombre").val('');
				$("#email").val('');
				$("#passwordr1").val('');
				$("#passwordr2").val('');
				};break;
		}
     })
						
                }
});
$('#loginf').submit(function (e) 
	{
	event.preventDefault();
	var username=$("#nlogin").val();
	var password=$("#plogin").val();
	var ingres=$("#ingres").val();
	if ($('#chk').is(":checked"))
	{var autov=1;}
	else {var autov=0;}
	if(username != "" && password != "")
                {
					
					$.ajax({
                            url: 'accounts/login.php',
                            type: 'POST',
                            dataType: 'html',
                            data: {username: username, password: password, autov:autov, ingres:ingres},
                        })
                        .done(function(resp)
                            {
                                if(resp == 0)
                                    {
									$("#plogin").css("border-bottom", "1.8px solid rgba(240,0,0,.60)");
									$(".login").css("min-height", "460px");
									$("#plogin").css("transition", "all .25s");
									$("#nlogin").css("border-bottom", "1.8px solid rgba(240,0,0,.60)");
									$("#nlogin").css("transition", "all .25s");//background:#001f3f;
									$('.bar').css("display", "none");
									$('#plogin').val('');
									$('.group #label').css("color", "rgba(240,0,0,.70)");
									$('#plogin').attr('placeholder' , "");
									$('#errorsmg').addClass("errormostrar");
									}
                                else if(resp == "other")
                                    {
                                        console.log('Si estas viendo estos es porque algo sucedio y no se procesaron los datos del login, intentalo nuevamente.');
                                    }
                                else if(resp == 1)
                                    {
                                       parent.history.back();
                                    }
                                 
                            })
						
                }
	 
});	
function nologin (element)
{
	$( "#idlog" ).removeClass( "silogin" );
	$('#idlog').addClass('nologin');
	$('#idreg').addClass('sireg');
	if($( "#idreg" ).hasClass( "noreg" ))
	{
	$( "#idreg" ).removeClass( "noreg" ).addClass('sireg');
	}
  
};
function noreg (element)
{
	$( "#idreg" ).removeClass( "sireg");
	if($( "#idlog" ).hasClass( "nologin" ))
	{	
	$('#idreg').addClass('noreg');
	}
	if($( "#idlog" ).hasClass( "nologin" ))
	{
	$( "#idlog" ).removeClass( "nologin" ).addClass('silogin');
	} 
};
function que(element)
{	
	var disp = $("#queid").css('display');
	if(disp=='none')
	{
	$('#queid').removeAttr( 'style' );
	$('#queid').addClass('queinfo');
	$(".queinfo").html("PinoNews, una nueva manera de enterarte de todo lo que pasa en el mundo Rey del Mueble!, enterate de Ofertas, novedades y mas!");
	}
	else{
		$("#queid").css('display', 'none');
	}
}


