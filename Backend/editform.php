	<section class="editform">
	<link rel="stylesheet" type="text/css" href="css/editcss.css">
	<div id="edit">
	<form action="mod.php" method="post" id="contact" enctype="multipart/form-data">
	<button id='closeb' onclick="eform(this)">X</button>
	<h3>Administracion</h3>
	<h4>Editar un Articulo</h4>
	<input type="hidden" name="id" value="<?php echo $m; ?>">
	<input type="hidden" name="pagm" value="<?php echo $pagina; ?>">	
	<fieldset><input id="name" type="text" name="nombre" tabindex="1" required placeholder="Nombre del Articulo" value="<?php echo $nombref; ?>" autofocus></fieldset>
	<fieldset><input type="number" id="precio" value="<?php echo $preciof;?>" name="precio" tabindex="1" required autofocus placeholder="Precio Articulo C/U"></fieldset>
	<fieldset><input type="text" name="color" value="<?php echo $colorf;?>" tabindex="1" required autofocus placeholder="Color"></fieldset>
	<fieldset><input id='medid1' placeholder="Ancho" type="number" name="ancho"  required autofocus>
	<input id='medid2'placeholder="Alto" type="number" name="alto"  required autofocus></fieldset>
	<fieldset>
	<?php $query3="SELECT * FROM tipo";
	$resultado3=$conexion->query($query3);?>
	<select name="tipos" required="required">
	<option value="0">Eliga una Opcion</option>
<?php
	while($registro=$resultado3->fetch_assoc())
	{
	if($tipof==$registro['id_tipo'])
	{
	?><option selected value="<?php echo $registro['id_tipo'];?>"><?php echo $registro['tipo'];?>	</option><?php
	}else
	{
	?><option value="<?php echo $registro['id_tipo'];?>"><?php echo 		$registro['tipo'];?>	</option><?php 
	}
	}
?>
	</select>
	</fieldset>
<textarea type="text" name="descripcion" minlength="10" tabindex="5" required autofocus placeholder="Descripcion y/o medida"><?php echo $descripcionf;?></textarea>
<fieldset><label>Subir Imagen<input type="file" name="imagen" accept="image/png, .jpeg, .jpg, image/gif"></label></fieldset>
<button name="enviar" type="submit" value='Enviar' id="contact-submit" data-submit="...Enviando">Enviar</button>
           
</form>
</div>
</section>
<script type="text/javascript">

function eform(element)
{
    var elem = document.getElementById('contact');
    elem.parentNode.removeChild(elem);
    $(".sec").css("filter", "blur(0px)");
    $(".sec").css("filter", "brightness(100%)");
    $(".sec").css("z-index", "1");
	var url = window.location.href.split('?')[0];
	window.history.replaceState({}, document.title, url);
	 
}

</script>