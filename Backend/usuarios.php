<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Usuarios Registrados - Reyes del Mueble</title>
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
<h3 id="mt">Usuarios Registrados - Rey del Mueble</h3>
</div>
	<?php
	include('../includes/conexion.php');
	$totalsql="SELECT * FROM usuarios";
	$consulta=$conexion->query($totalsql);
	if($consulta->num_rows==0){echo "<div class='noreg'>No hay registros que mostrar.</div>";die();}
	$Tamano_pagina = 10;
	$total_paginas=0;
	if(!isset($_GET['pagina'])) 
    {
    $pagina=1;
    $inicio=0;
    }
    else 
    { 
		$pagina=$_GET['pagina'];
        $inicio=($pagina-1)*$Tamano_pagina;
    }
    $num_total_registros = $consulta->num_rows;
    $sql="SELECT * FROM usuarios " . " LIMIT " . $inicio . "," . $Tamano_pagina;
    $res=$conexion->query($sql);
    $total_paginas = ceil($num_total_registros / $Tamano_pagina);
	if(isset($_GET['f']))
	{
    if($_GET['f']=='compras')
	{
	$sql="SELECT * FROM usuarios ORDER BY compras DESC";
    }
	else
	{
    $filtro=$_GET['f'];
    $sql2="SELECT * FROM usuarios ORDER BY $filtro";
    $consulta4=$conexion->query($sql2);
    $num_total_registros = $consulta4->num_rows;
    $sql="SELECT * FROM usuarios ORDER BY $filtro " . " LIMIT " . $inicio . "," . $Tamano_pagina;
    $total_paginas = ceil($num_total_registros / $Tamano_pagina); 
    }
	$res=$conexion->query($sql);
	}
	?>
<table class='table-fill'>
	<?php
		echo "<tr>";
		echo "<th class='text-center'><a href='usuarios.php?f=id_usuario'>ID_Usuarios</a></th>";
		echo "<th class='text-center'><a href='usuarios.php?f=nombre_apellido'>Nombre y Apellido</a></th>";
		echo "<th class='text-center'><a href='usuarios.php?f=fecha_nac'>Fecha de nacimiento</a></th>";
		echo "<th class='text-center'><a href='usuarios.php?f=usuario'>Nombre de Usuario</a></th>";
		echo "<th class='text-center'><a href='usuarios.php?f=fecha_sesion'>Ultima sesion</a></th>";
		echo "<th class='text-center'><a href='usuarios.php?f=compras'>Compras</a></th>";
		echo "<th class='text-center'><a href='usuarios.php?f=news'>News</a></th>";
		echo "<th class='text-center'><a href='usuarios.php?f=mail'>EMAIL</a></th>";
		echo "</tr>";
	while($row=$res->fetch_assoc())
	{
		echo "<tr id='usertr'>";
		echo "<td class='text-center'>".$row['id_usuario']."</td>";
		echo "<td class='text-center'>".$row['nombre_apellido']."</td>";
		echo "<td class='text-center'>".$row['fecha_nac']."</td>";
		echo "<td class='text-center'>".$row['usuario']."</td>";
		echo "<td class='text-center'>".date('d-m-Y', strtotime($row['fecha_sesion']))."</td>";
		echo "<td class='text-center'>".$row['compras']."</td>";
		switch($row['news'])
		{
			case 0:{echo "<td class='text-center'>No anotado en PinoNews.</td>";};break;
			case 1:{echo "<td class='text-center'>Anotado en PinoNews.</td>";};break;
		}
		echo "<td class='text-center'>".$row['mail']."</td>";
		echo "<tr>";
	}	
	?>
</table>
	<?php
	echo "<div class='center'>";
	echo "<div class='paginacion'>";
	if ($total_paginas > 1)
    { 
    if($pagina!=1){$d=$pagina-1;echo "<a href='usuarios.php?pagina=".$d."'> << </a>";}   
   	for ($i=1;$i<=$total_paginas;$i++)
       { 
      if ($pagina == $i) {echo "<a>".$pagina."</a>";}
       else{ echo "<a href='usuarios.php?pagina=".$i."'>".$i."</a> "; }
       }
    if($pagina!=$total_paginas){$d=$pagina+1;echo "<a href='usuarios.php?pagina=".$d."'> >> </a>";} 
    }
   	echo "</div>";
	echo "</div>"; 
	?>
	<script src="../js/desplegar.js"></script>
	</div>
	<div style="display:none">
</body>
</html>