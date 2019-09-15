<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Contacto</title>
		<link rel="shortcut icon" href="../favicon.png" />
		<link rel="stylesheet" type="text/css" href="css/tabla.css">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<?php include_once('header.php'); ?>
		<section class="sec"></section>
    	<div class="container">
		<form action="#" method="post" id="contact" enctype="multipart/form-data">
            <h3>Administracion</h3>
            <h4>Agregar un Articulo</h4>
            <fieldset><input id="name" type="text" name="nombre" tabindex="1" required placeholder="Nombre del Articulo" autofocus></fieldset>
            <fieldset><input type="number" id="precio" name="precio" tabindex="1" required autofocus placeholder="Precio Articulo C/U"></fieldset>
            <fieldset><input type="text" name="color"  tabindex="1" required autofocus placeholder="Color"></fieldset>
            <fieldset><input id='medid' placeholder="Ancho" type="number" name="ancho"  required autofocus >
            <input id='medid'placeholder="Alto" type="number" name="alto"  required autofocus ></fieldset>
            <fieldset><select name="tipos" required="required" >
				<option value="0">Eliga una Opcion</option>
				<option value="1">Mesa Cotidiana</option>
				<option value="2">Mesa Rustica</option>
				<option value="3">Sillas</option>
				<option value="4">Esculturas</option>
				<option value="5">Macetas</option>
				<option value="6">Cajoneras</option>
				<option value="7">Camas</option>
				<option value="8">Mesas de oficina</option>
				<option value="9">Sillas oficina</option>
				<option value="10">Cuadros</option>
				<option value="11">Sillones</option>
                </select></fieldset>
            <textarea type="text" name="descripcion" minlength="10" tabindex="5" required autofocus placeholder="Descripcion y/o medida"></textarea>
            <fieldset><label>Subir Imagen<input type="file" name="imagen" accept="image/png, .jpeg, .jpg, image/gif" required="required" id="ar"></label></fieldset>
			<button name="insertar" type="submit" value='Enviar' id="contact-submit" data-submit="...Enviando">Subir producto</button>
           
		</form>
            </div>
            <div style="display:none">
	</body>
</html>
<?php
	require("../includes/conexion.php");
	if(isset($_POST['insertar']))
	{
		include 'insert.php';
    }	
?>