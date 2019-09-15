<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Ventas - Reyes del Mueble</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="../favicon.png" />
	<link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
</head>
<body>
	<?php include_once('header.php'); ?>
	<section class="sec"></section>
<div id="contenedor">
<div class="table-title">
<h3 id="mt">Ventas Muebles - Rey del Mueble</h3>
</div>
<table class='table-fill'>
	<?php
	include('../includes/conexion.php');
	$totalsql="SELECT * FROM ventas";
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
    $sql="SELECT * FROM ventas " . " LIMIT " . $inicio . "," . $Tamano_pagina;
    $res=$conexion->query($sql);
    $total_paginas = ceil($num_total_registros / $Tamano_pagina);
	while($row=$res->fetch_assoc())
	{
			echo "<tr>";
			echo "<th class='text-center'>Numero Venta<br>".$row['id_venta']."</th>";
			echo "<th class='text-center'>ID_Mueble</th>";
			echo "<th class='text-center'>Imagen</th>";
			echo "<th class='text-center'>ID_Usuario<br>".$row['id_usuario']."</th>";
			echo "<th class='text-center'>Cantidad</th>";
			echo "<th class='text-center1'>Fecha<br>".$row['fecha']."</th>";
			echo "<th class='text-center' style='border-right:none'>Total<br>$".$row['total']."</th>";
			echo "<th class='text-center'><button class='boton' id='boton".$row['id_venta']."' onclick='desplegar(this,".$row['id_venta'].");'><i style='cursor:pointer' class='fas fa-chevron-up'></i></button></th>";
			echo "<tr>";
			$v=$row['id_venta'];
			$sql3="SELECT p.id_prod,p.id_productoxventa,m.imagen,p.cantidad,m.descripcion,p.preciounidad,m.nombre FROM prodxventas p JOIN muebles m ON p.id_prod=m.id_mueble WHERE id_venta='$v'";
			$res2=$conexion->query($sql3);
			while($row2=$res2->fetch_assoc())
			{	
			echo "<tr id='tr".$row['id_venta']."'>";
			echo "<td class='text-center1'></td>";
			echo "<td class='text-center1' style='max-width:510px;'>".$row2['nombre']."<br>".$row2['descripcion']."</td>";
			if (!file_exists("../".$row2['imagen']))
			{echo "<td><img src='../Imagenes/Productos/aa.jpg' id='img'></td>";}else
			{
            echo "<td><img src='../".$row2['imagen']."' id='img'></td>";
			}
			echo "<td class='text-center1'></td>";
			echo "<td class='text-center1'>".$row2['cantidad']."</td>";
			echo "<td class='text-center1'></td>";
			echo "<td class='text-center1' style='text-align:right;border:none'>$".$row2['preciounidad']."</td>";
			echo "<td style='border:none;margin:0;'></td>";
			echo "</tr>";
			}
		}	
	?>
</table>
	<?php
	echo "<div class='center'>";
	echo "<div class='paginacion'>";
	if ($total_paginas > 1)
    { 
    if($pagina!=1){$d=$pagina-1;echo "<a href='ventas.php?pagina=".$d."'> << </a>";}   
   	for ($i=1;$i<=$total_paginas;$i++)
       { 
      if ($pagina == $i) {echo "<a>".$pagina."</a>";}
       else{ echo "<a href='ventas.php?pagina=".$i."'>".$i."</a> "; }
       }
    if($pagina!=$total_paginas){$d=$pagina+1;echo "<a href='ventas.php?pagina=".$d."'> >> </a>";} 
    }
   	echo "</div>";
	echo "</div>"; 
	?>
</div>
	<script src="../js/desplegar.js"></script>
	<div style="display:none">
</body>
</html>