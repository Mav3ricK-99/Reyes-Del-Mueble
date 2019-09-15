function descripcion(element, number)
	{	
		var disp = $("."+number+".descc").css('display');
		if(disp=='none')
		{
			if($(window).width() < 768)
    		{$(".imagen."+number).css("height", "380px");}
			else{$(".imagen."+number).css("height", "400px");}
			$("."+number+".descc").css("display", "block");
			
		}
		else{
			if($(window).width() < 768)
    		{
			$(".imagen."+number).css("height", "320");
			}
			else{
			$(".imagen."+number).css("height", "340px");
			}
			$("."+number+".descc").css("display", "none");
		}
	}
function descripcionof(element, number)
	{	
		var disp = $("."+number+".desccof").css('display');
		if(disp=='none')
		{
			$(".oferta."+number).css("height", "auto");
			$("."+number+".desccof").css("display", "block");
		
			
		}
		else{
			$("."+number+".desccof").css("display", "none");
			$(".oferta."+number).css("height", "360");
   			
		}
	}