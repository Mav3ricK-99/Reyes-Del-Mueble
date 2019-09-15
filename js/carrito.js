function agregar(element,number)
		{
			$(".carrito."+number).css("color", "rgba(135, 206, 250, .5)");
			$(".carritoof."+number).css("color", "rgba(240, 0, 0, .5)");
   		$.get('includes/carrito/carritoga.php', 'id_mueble=' + number, function (response) 
		{});
   		
	};
function agregars(element,number)
		{
		$.get('#', 'id_mueble=' + number, function (response) 
		{});
   		location.reload();
	};
function sumar(number)
		{
   		
		$.get('carritoga.php', 'id_suma=' + number, function (response) 
		{
			var precio=$('#precio'+number).text();
			var precioint= parseInt(precio);
			var subtotal=$('#subtotal'+number).text();
			var subtotalint= parseInt(subtotal);
			subtotalint=subtotalint+precioint;
			$('#subtotal'+number).text(subtotalint);
			var total=$('#total').text();
			var totalint= parseInt(total);
			totalint=totalint+precioint;
			$('#total').text(totalint);
			var suma=$('#suma'+number).text();
			var sumaint= parseInt(suma);
			sumaint++;
			$('#suma'+number).text(sumaint);
			if(sumaint>1)
			{
				$("#menosb"+number).css( "display", "inherit" );
				$("#menosb"+number).css( "float", "left" );
			}
		});
	};
function restar(number)
		{
   		
		$.get('carritoga.php', 'id_resta=' + number, function (response) 
		{
			var precio=$('#precio'+number).text();
			var precioint= parseInt(precio);
			var subtotal=$('#subtotal'+number).text();
			var subtotalint= parseInt(subtotal);
			subtotalint=subtotalint-precioint;
			$('#subtotal'+number).text(subtotalint);
			var total=$('#total').text();
			var totalint= parseInt(total);
			totalint=totalint-precioint;
			$('#total').text(totalint);
			var resta=$('#suma'+number).text();
			var restaint= parseInt(resta);
			restaint--;
			$('#suma'+number).text(restaint);
			if(restaint<2)
			{
				$("#menosb"+number).css( "display", "none" );
			}
			
		});
	};
	
	function eliminar(number)
		{
			
   		$.get('carritoga.php', 'id_borra=' + number, function (response) 
		{
			$("#"+number).css( "display", "none" );
			var subtotal=$('#subtotal'+number).text();
			var subtotalint= parseInt(subtotal);
			var totalstring=$('#total').text();
			var total= parseFloat(totalstring);
			$("#separador"+number).css( "display", "none" );
			total=total-subtotalint;
			if(total<1)
			{
				$("#quitarcompra").css( "display", "none" );
				$("#total").css( "display", "none" );
				$("#atotal").css( "display", "none" );
				$("#cvacio").css( "display", "inherit" );
				$(".producto").css( "display", "none" );
				$("#lcarrito").css( "display", "none" );
				
			}else
			{
			$('#total').text(total);
			}
   		});
		
	};


function refresh(element)
	{	
		location.reload();
	}

function limpiarcarrito(element)
	{	
		$.get('carritoga.php', 'c_limpiar', function (response) 
		{
			location.reload();
		});
	}


function comprarp(element, number)
		{
   		$.get('includes/carrito/comprar.php', 'cproducto=' + number, function (response) 
		{
			$("#comprab").css("background", "rgba(27, 44, 68, .9)");
			$("#comprab").prop("onclick", null).off("click");
			window.location = 'https://reyesdelmueble1.000webhostapp.com/index.php';
		});
	};
function sumarp(number,mnumber)
		{
   			
			var suma=$('#c').text();
			var sumaint= parseInt(suma);
			sumaint++;
			$('#c').text(sumaint);
			if(sumaint>1)
			{
			$(".carritoa").attr("onclick","agregarp(this,"+mnumber+","+sumaint+")");
			};
	}

function menosp(number,mnumber)
		{
   			
			var resta=$('#c').text();
			var restaint= parseInt(resta);
			restaint--;
			$('#c').text(restaint);
			if(restaint<1)
			{
				var resta=$('#c').text();
				var restaint= parseInt(resta);
				restaint++;
				$('#c').text(restaint);
			}
			$(".carritoa").attr("onclick","agregarp(this,"+mnumber+","+restaint+")");
	
	};
function agregarp(element,number,number2)
		{
		$.ajax({
                          url: 'includes/carrito/carritoga.php',
                          type: 'GET',
                          dataType: 'html',
                          data: {id_mueble:number, cantidad:number2},
                        })
                        .done(function(resp)
                            {
                            $(".carritoa").css("color", "rgba(135, 206, 250, .5)");
							$(".carritoa").prop("onclick", null).off("click");
                            });
   		
	};
function nolog(Element)
{
	$("#nosess").html("Actualmente no te encuentras en una sesion ").addClass("errors");
	//$("a").append("Iniciar sesion.");
}







