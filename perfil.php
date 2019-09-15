<?php session_start(); ?>
<!DOCTYPE html>
 <html lang="es">
<head>
    <title>Perfil - Reyes del Mueble</title>
    <link rel="shortcut icon" href="favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/perfil.css">
	
	<meta charset="UTF-8">
</head> 
<body>  
	<?php 
	if(!isset($_SESSION['user'])||!isset($_SESSION['id_user']))
	{header("Location: https://reyesdelmueble1.000webhostapp.com/index.php");}
	include('includes/header.php'); ?>
	<section id="section">
	<h3 id="hper"><?php echo $_SESSION['user'];?></h3>	
	<?php
	require('includes/conexion.php');
	include_once('includes/accounts/perf.php');
	echo "<article class='perfil'>";
	Listardatos($_SESSION['id_user'],$conexion);
	echo "</article>";
	?>
	
	</section>
	<?php include_once('includes/footer.php'); ?>
	<script type="text/javascript" src="js/cambiarp.js"></script>
</body>
</html>
		
	