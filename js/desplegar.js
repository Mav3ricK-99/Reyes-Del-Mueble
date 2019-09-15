function desplegar(element,number)
{	var a=$('> * #tr'+number).fadeOut(500);
	if(a.is(":visible"))
		{	
			$('> * #tr'+number).fadeOut(500);
			$('#boton'+number).css('transform', 'rotate(180deg)');
		}
 	else
	{
		$('> * #tr'+number).fadeIn(500);
		$('#boton'+number).css('transform', 'rotate(0deg)');
	}
	
	
}