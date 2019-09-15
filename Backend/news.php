<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Usuarios de PinoNews Registrados - Reyes del Mueble</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="../favicon.png" />
	<link rel="stylesheet" type="text/css" href="css/table.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<?php include_once('header.php'); ?>
	<section class="sec"></section>
<div id="contenedor">
<div class="table-title">
<h3 id="mt">Usuarios de PinoNews Registrados - Rey del Mueble</h3>
</div>
	<?php
	include('../includes/conexion.php');
	$totalsql="SELECT * FROM news_table";
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
    $sql="SELECT * FROM news_table " . " LIMIT " . $inicio . "," . $Tamano_pagina;
    $res=$conexion->query($sql);
    $total_paginas = ceil($num_total_registros / $Tamano_pagina);
	if(isset($_GET['f']))
	{
    $filtro=$_GET['f'];
    $sql2="SELECT * FROM news_table ORDER BY $filtro";
    $consulta4=$conexion->query($sql2);
    $num_total_registros = $consulta4->num_rows;
    $sql="SELECT * FROM news_table ORDER BY $filtro " . " LIMIT " . $inicio . "," . $Tamano_pagina;
    $total_paginas = ceil($num_total_registros / $Tamano_pagina); 
    }
	$res=$conexion->query($sql);
	?>
<table class='table-fill'>
	<?php
		echo "<tr>";
		echo "<th class='text-center'><a href='news.php?f=id_usuarionews'>ID_UsuariosN</a></th>";
		echo "<th class='text-center'><a href='news.php?f=nombre'>Nombre y Apellido</a></th>";
		echo "<th class='text-center'><a href='news.php?f=mail'>EMAIL</a></th>";
		echo "<th class='text-center'><a href='news.php?f=fecha_news'>Fecha de Registro a News</a></th>";
		echo "</tr>";
	while($row=$res->fetch_assoc())
	{
		echo "<tr id='usertr'>";
		echo "<td class='text-center'>".$row['id_usuarionews']."</td>";
		echo "<td class='text-center'>".$row['nombre']."</td>";
		echo "<td class='text-center'>".$row['mail']."</td>";
		echo "<td class='text-center'>".date('d-m-Y', strtotime($row['fecha_news']))."</td>";
		echo "<tr>";
	}	
	?>
</table>
	<?php
	echo "<div class='center'>";
	echo "<div class='paginacion'>";
	if ($total_paginas > 1)
    { 
    if($pagina!=1){$d=$pagina-1;echo "<a href='news.php?pagina=".$d."'> << </a>";}   
   	for ($i=1;$i<=$total_paginas;$i++)
       { 
      if ($pagina == $i) {echo "<a>".$pagina."</a>";}
       else{ echo "<a href='news.php?pagina=".$i."'>".$i."</a> "; }
       }
    if($pagina!=$total_paginas){$d=$pagina+1;echo "<a href='news.php?pagina=".$d."'> >> </a>";} 
    }
   	echo "</div>";
	echo "</div>"; 
	?>
	<div style="display:none">
</div>
</body>
</html>