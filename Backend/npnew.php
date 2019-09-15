<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Redactar una Pnew - Reyes del Mueble</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="../favicon.png" />
	<link rel="stylesheet" type="text/css" href="css/npnew.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<?php include_once('header.php'); ?>
	<section class="sec"></section>
<div id="contenedor">
<div class="table-title">
<h3 id="mt">Redactar PinoNews - Rey del Mueble</h3>
</div>
	<div class="pform">
		<form action="#" method="POST" id="form">
		<h3>Encabezado</h3>
		<input type="text" name="encab" maxlength="32">	
		<h3>Mensaje</h3>
		<textarea name="mensaje" placeholder="Hey que vas a escribir hoy?, recuerda que las PinoNews son importantes para mantener a los usuarios activos."></textarea>
		<input type="submit" name="enviarp" value="Enviar Pino New">
		</form>
	</div>
	<?php
	if(isset($_POST['enviarp']))
	{
	$enc=$_POST['encab'];
	$men=$_POST['mensaje'];
	require_once('../includes/conexion.php');
	$sql="SELECT mail FROM news_table";
	$sql2="SELECT mail FROM usuarios WHERE news=1";
	$resp=$conexion->query($sql);
	$resp2=$conexion->query($sql2);
	$maila="";
	while($row=$resp2->fetch_assoc())
	{
		
		$maila.=$row['mail'].", ";
	}
	while($row=$resp->fetch_assoc())
	{
		
		$maila.=$row['mail'].", ";
	}
	$mensaje = "<html><body style='font-family:arial'><h4>Que hay denuevo!, has Recibido una nueva Pnews!</h4>";
	$mailto = implode(", ",array_reverse(explode(",",$maila)));
	$ahora=date('d-m-Y h:i:s A');
	$mensaje .= "<div style='font-size:17px;color:gray;padding:4px;'>Estas listo para recibir los nuevos descuentos, ofertas y enterarte de las ultimas novedades del sitio?</div><br>".$men;
    $mensaje .= "<br><div style='color:gray;font-size:14px;'>".$ahora."</div></body></html>";
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	$mail=mail($mailto,"Reyes del Mueble - ".$enc." ",$mensaje,$headers);
	
	}
	?>
	</div>
	<div style="display:none">
</body>
</html>