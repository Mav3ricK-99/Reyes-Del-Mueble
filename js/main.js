window.onscroll = function() {myFunction(original)};
var header = document.getElementById("myHeader");
var sticky = myHeader.offsetTop;
var original=window.screen.width;
function myFunction(original) {
	if($(window).width() > 768)
    {
  if (window.pageYOffset > sticky) 
  {
    myHeader.classList.add("sticky");
	var xdd= Math.round(window.devicePixelRatio * 100);
	if(xdd<100){$(".sticky").css("width", original);}
	else{$(".sticky").css("width", "100%");}
	
  } else
  {
    myHeader.classList.remove("sticky");
	$("#myHeader").css("width", "100%");
  }
	}
}
$("#btn-menu").click(function(){
$(".cuenta").removeClass("cuenta").addClass("cuenta2");
})
$(".subnoti").click(function(){
	$(this).children("ul").slideToggle();
})
$("ul").click(function(p){
	p.stopPropagation();
})
$(".submenu").click(function(){
	$(this).children("ul").slideToggle();
})
$("ul").click(function(p){
	p.stopPropagation();
})
$("#config").click(function(){
	$(this).children("ul").slideToggle();
})
$("ul").click(function(p){
	p.stopPropagation();
})
function mlogin(element)
{
	var disp = $('.login').css('display');
	if(disp=='none')
		{
		   $(".login").css("display", "block");
		}
	else{
		$(".login").css("display", "none");
	}
    
}
	$('#form').submit(function (e) 
	{
	event.preventDefault();
	var username=$("#u").val();
	var password=$("#p").val();
	var ingres=$("#ingres").val();
	if ($('#check-one').is(":checked"))
	{
		var autov=1;
		
    }
	else {var autov=0;}
	if(username != "" && password != "")
                {
					
					$.ajax({
                            url: 'includes/accounts/login.php',
                            type: 'POST',
                            dataType: 'html',
                            data: {username: username, password: password, autov:autov, ingres:ingres},
                        })
                        .done(function(resp)
                            {
                                if(resp == 0)
                                    {
										$("#p").css("border-bottom", "2px solid rgba(240,0,0,.85)");
										$("#error").html("Usuario o contraseña incorrectos").addClass("errorsmg");
                                        $(".login").css("height", "auto");
										$('#p').val('');
										$('#p').attr('placeholder' , "");
                                    }
                                else if(resp == "other")
                                    {
                                        console.log('Si estas viendo estos es porque algo sucedio y no se procesaron los datos del login, intentalo nuevamente.');
                                    }
                                else if(resp == 1)
                                    {
                                       location.reload();
                                    }
                                 
                            })
						
                }
	 
});		

$(document).ready(function(){
	$(window).scroll(function(){
		
			var barra = $(window).scrollTop();
			var posicion = barra * .20;
			$('body').css({
				'background-position': '0 -' + posicion + 'px'
				
			})
					 
		});
	$('#formb').submit(function (e) 
	{
	event.preventDefault();
	var username=$("#u").val();
	var password=$("#p").val();
	var ingres=$("#ingres").val();
	if ($('#check-one').is(":checked"))
	{
		var autov=1;
		
    }
	else {var autov=0;}
	if(username != "" && password != "")
                {
					
					$.ajax({
                            url: '../includes/accounts/login.php',
                            type: 'POST',
                            dataType: 'html',
                            data: {username: username, password: password, autov:autov, ingres:ingres},
                        })
                        .done(function(resp)
                            {
                                if(resp == 0)
                                    {
										$("#p").css("border-bottom", "2px solid rgba(240,0,0,.85)");
										$("#error").html("Usuario o contraseña incorrectos").addClass("errorsmg");
                                        $(".login").css("height", "auto");
										$('#p').val('');
										$('#p').attr('placeholder' , "");
                                    }
                                else if(resp == "other")
                                    {
                                        console.log('Si estas viendo estos es porque algo sucedio y no se procesaron los datos del login, intentalo nuevamente.');
                                    }
                                else if(resp == 1)
                                    {
                                       location.reload();
                                    }
                                 
                            })
						
                }
	 
});		
	
	
	
});
		
   $('#form2').submit(function (e) 
	{
	event.preventDefault();
	var username=$("#u").val();
	var password=$("#p").val();
	var ingres=$("#ingres").val();
	if ($('#check-one').is(":checked"))
	{
		var autov=1;
		
    }
	else {var autov=0;}
	if(username != "" && password != "")
                {
					
					$.ajax({
                            url: 'login.php',
                            type: 'POST',
                            dataType: 'html',
                            data: {username: username, password: password, autov:autov, ingres:ingres},
                        })
                        .done(function(resp)
                            {
                                if(resp == 0)
                                    {
										$("#p").css("border-bottom", "2px solid rgba(240,0,0,.85)");
										$("#error").html("Usuario o contraseña incorrectos").addClass("errorsmg");
                                        $(".login").css("height", "auto");
										$('#p').val('');
										$('#p').attr('placeholder' , "");
                                    }
                                else if(resp == "other")
                                    {
                                        console.log('Si estas viendo estos es porque algo sucedio y no se procesaron los datos del login, intentalo nuevamente.');
                                    }
                                else if(resp == 1)
                                    {
                                       location.reload();
                                    }
                                 
                            })
						
                }
	 
});		









