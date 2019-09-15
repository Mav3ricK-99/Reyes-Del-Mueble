<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registros de PinoNews - Reyes del Mueble</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="../favicon.png" />
	<link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
</head>
<body>
	<?php include_once('header.php'); ?>
	<section class="sec"></section>
<div id="contenedor">
	<div class="table-title">
		<h3 id="mt">Registros de PinoNews - Rey del Mueble</h3>
	</div>
	<?php
	include '../includes/conexion.php';
	$query2="SELECT * FROM news_registros";
	$resultado2=$conexion->query($query2);
	$query2="SELECT fecha_registro_news FROM news_registros";
	$resultado=$conexion->query($query2);
	$borrados = file_get_contents("borradosp.dat");
	if($resultado2->num_rows==0)
	{
	echo "<div class='noreg'>No hay registros que mostrar.</div>";
	echo "<div id='totalb'>Total borrados hasta la fecha:".$borrados."</div>";
	die();
	}
	while($row2=$resultado->fetch_assoc())
	{
	$fecha=$row2['fecha_registro_news'];
	$nuevo = date("d/m/Y", strtotime($row2['fecha_registro_news']));
	$data=date("d/m/Y");
	$dif_fecha=floor((strtotime('now')-strtotime($fecha))/(60*60*24));
	if($dif_fecha==3||$dif_fecha>3)
	{
   		$rdel="DELETE FROM news_registros WHERE fecha_registro_news='$fecha'";
   		$res=$conexion->query($rdel);
   		$borrados=$borrados+1;
		file_put_contents('borradosp.dat', $borrados);
    }
	}
	$query2="SELECT * FROM news_registros";
	$resultado2=$conexion->query($query2);
	if($resultado2->num_rows==0)
	{
	echo "<div class='noreg'>No hay registros que mostrar.</div>";
	echo "<div id='totalb'>Total borrados hasta la fecha:".$borrados."</div>";
	die();
	}
	?>
	<table class='table-fill'>
	<tr>
		<th class='text-center'>ID_RegistroP</th>
		<th class='text-center'>Nombre y Apellido</th>
		<th class='text-center'>EMAIL</th>
		<th class='text-center'>Codigo de Registro</th>
		<th class='text-center'>Fecha Registro</th>
	</tr>
	<?php
	while($row=$resultado2->fetch_assoc())
			{
				echo "<tr id='usertr'>";
				echo "<td class='text-center'>".$row['id_newregistro']."</td>";
				echo "<td class='text-center'>".$row['nombre']."</td>";
				echo "<td class='text-center'>".$row['mail']."</td>";
				echo "<td class='text-center'>".$row['keyregistro']."</td>";
				echo "<td class='text-center'>".$row['fecha_registro_news']."</td>";
				echo "</tr>";
				
			}
	echo "</table>";
	echo "<div id='totalb'>Total borrados hasta la fecha:".$borrados."</div>";
	?>
</table>
</div>
</body>
</html>