<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Consultas de usuarios - Reyes del Mueble</title>
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
<div id="contenedor">
<div class="table-title">
<h3 id="mt">Consultas de usuarios - Rey del Mueble</h3>
</div>
	<article class="tableform">
                <form method="get" action="consultast.php">
                    <select name="catego" style="min-width:180px;">
                        <option value="Todos">Elige una opcion</option>
                        <option value="1">Consultas</option>
                        <option value="2">Criticas</option>
                        <option value="3">Reclamos</option>
                        <option value="4">Datos Personales</option>
                        <option value="5">Otros</option>
                        <option value="Todos">Todos</option>
                    </select>
                    <input type="submit" name="enviarcat" value="Listar">
                </form>
	</article>
	<?php
	include('../includes/conexion.php');
	$totalsql="SELECT * FROM contacto";
	$consulta=$conexion->query($totalsql);
	if($consulta->num_rows==0){echo "<div class='noreg'>No hay consultas que mostrar.</div>";die();}
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
    $sql="SELECT * FROM contacto " . " LIMIT " . $inicio . "," . $Tamano_pagina;
    $res=$conexion->query($sql);
    $total_paginas = ceil($num_total_registros / $Tamano_pagina);
	if(isset($_GET['catego'])||isset($_GET['f']))
	{
		include('filterc.php');
		if($res->num_rows==0){echo "<div class='noreg'>No hay consultas que mostrar.</div>";die();}
	}
	if(isset($_GET['catego']))
{
echo "<table class='table-fill'";
echo "<tr>";
echo "<th class='text-center'><a href='consultast.php?f=id_mensaje&&catego=".$catego."'>ID_Mensaje</a></th>";
echo "<th class='text-center'><a href='consultast.php?f=id_usuario&&catego=".$catego."'>ID_usuario</a></th>";    
echo "<th class='text-center'><a href='consultast.php?f=nombre_apellido&&catego=".$catego."'>Nombre y Apellido</a></th>";
echo "<th class='text-center'><a href='consultast.php?f=email&&catego=".$catego."'>Email</a></th>";
echo "<th class='text-center'><a href='consultast.php?f=telefono&&catego=".$catego."'>Telefono</a></th>";
echo "<th class='text-center'><a href='consultast.php?f=asunto&&catego=".$catego."'>Asunto</a></th>";
echo "<th class='text-center'><a href='consultast.php?f=mensaje&&catego=".$catego."'>Consulta</a></th>";
echo "</tr>";    
}
else   //////////////////////////////////////////////////////////////////////////////////////
{
echo "<table class='table-fill'>";
echo "<tr>";
echo "<th class='text-center'><a href='consultast.php?f=id_mensaje'>ID_Mensaje</a></th>";
echo "<th class='text-center'><a href='consultast.php?f=id_usuario'>ID_Usuario</a></th>";    
echo "<th class='text-center'><a href='consultast.php?f=nombre_apellido'>Nombre y Apellido</a></th>";
echo "<th class='text-center'><a href='consultast.php?f=email'>Email</a></th>";
echo "<th class='text-center'><a href='consultast.php?f=telefono'>Telefono</a></th>";
echo "<th class='text-center'><a href='consultast.php?f=asunto'>Asunto</a></th>";
echo "<th class='text-center'><a href='consultast.php?f=mensaje'>Consulta</a></th>";
echo "</tr>";
}
	while($row=$res->fetch_assoc())
	{
		echo "<tr id='usertr'>";
		echo "<td class='text-center'>".$row['id_mensaje']."</td>";
		if($row['id_usuario']=="")
		{
			echo "<td class='text-center'>No es usuario de la pagina</td>";
		}
		else
		{
			echo "<td class='text-center'>".$row['id_usuario']."</td>";
		}
		echo "<td class='text-center'>".$row['nombre_apellido']."</td>";
		echo "<td class='text-center'>".$row['email']."</td>";
		echo "<td class='text-center'>".$row['telefono']."</td>";
		switch($row['asunto'])
		{
			case 1:{echo "<td class='text-center'>Consultas</td>";};break;
			case 2:{echo "<td class='text-center'>Criticas</td>";};break;
			case 3:{echo "<td class='text-center'>Reclamo</td>";};break;
			case 4:{echo "<td class='text-center'>Datos Personales</td>";};break;
			case 5:{echo "<td class='text-center'>Otros</td>";};break;
		}
		echo "<td class='text-center' style='min-width:230px;'>".$row['mensaje']."</td>";
		echo "<tr>";
	}	
	echo "</table>";
	echo "<div class='center'>";
	echo "<div class='paginacion'>";
	if ($total_paginas > 1)
    { 
    if($pagina!=1){$d=$pagina-1;echo "<a href='consultast.php?pagina=".$d."'> << </a>";}   
   	for ($i=1;$i<=$total_paginas;$i++)
       { 
      if ($pagina == $i) {echo "<a>".$pagina."</a>";}
       else{ echo "<a href='consultast.php?pagina=".$i."'>".$i."</a> "; }
       }
    if($pagina!=$total_paginas){$d=$pagina+1;echo "<a href='consultast.php?pagina=".$d."'> >> </a>";} 
    }
   	echo "</div>";
	echo "</div>"; 
	?>
</div>
	<div style="display:none">

</body>
</html>