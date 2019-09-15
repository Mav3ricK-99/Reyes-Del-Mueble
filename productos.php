<?php session_start(); ?>
<!DOCTYPE html>
 <html lang="es">
<head>
    <title>Reyes del pino - Productos</title>
    <link rel="shortcut icon" href="favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/productos.css">
    <link rel="stylesheet" type="text/css" href="css/component.css">
	<script src="js/vistart.js"></script>
	<meta charset="UTF-8">
</head> 
<body>
    <?php include_once('includes/header.php'); ?>
	<article id="titu">
	<div class="toph2"><h2>Productos</h2></div>
	</article>
    <section id="section1">
		
    <article id="arriba">
   <div id="imagenes">
                <?php
	   			
$Tamano_pagina=8;    
if(!isset($_GET['pagina'])) {
    $pagina=1;
    $inicio=0;
}
else 
{ 
    $pagina=$_GET['pagina'];
    $inicio=($pagina-1)*$Tamano_pagina;
}
$GLOBALS['p']=0;
function ListProduct($pagina, $inicio, $conexion,$Tamano_pagina,$p)
{   
    $obtener_todo = "SELECT * FROM muebles";
    $consulta4=$conexion->query($obtener_todo);
    $num_total_registros = $consulta4->num_rows;
    $consulta_resultados = mysqli_query($conexion, "
    SELECT * FROM `muebles` ORDER BY descripcion ASC LIMIT $inicio, $Tamano_pagina");
    $total_paginas = ceil($num_total_registros / $Tamano_pagina);
	while($datos=$consulta_resultados->fetch_assoc())
    {
 	$p=$p+1;
    include 'includes/mostrar.php';
    }
	$consulta_resultados->free();
    return $total_paginas;
}
    $total_paginas=ListProduct($pagina, $inicio, $conexion,$Tamano_pagina,$p);
	unset($GLOBALS['p']);

?> 
	   			
    </div>
	</article>
    
    
    </section>
	<?php 
        if ($total_paginas > 1)
        {?> 
            <div class="pagination__wrapper">
            <ul class="pagination"><?php
            if($pagina!=1){$d=$pagina-1;echo "<li><a href='productos.php?pagina=".$d."'><button class='prev' title='Pagina anterior'>&#10094;</button></a></li>";}
            else{echo "<li><button class='prev' title='Pagina anterior'>&#10094;</button></li>";}
            for ($i=1;$i<=$total_paginas;$i++)
            {
                if ($pagina == $i) {echo "<li><button class='active' title='Pagina actual - ".$pagina."'>".$pagina."</button></li>";}
                else
                {
                    echo "<li><a href='productos.php?pagina=".$i."'><button title='Pagina  ".$i."'>".$i."</button></a></li>"; 
                }
            }
            if($pagina!=$total_paginas){$d=$pagina+1;echo "<li><a href='productos.php?pagina=".$d."'> <button class='next title='Pagina siguiente'>&#10095;</button></a></li>";}
            else{echo "<li><button class='next title='Pagina siguiente'>&#10095;</button></li>";}
			?></ul>
        </div><?php
        }
        ?>
    <?php include_once('includes/footer.php'); ?>
</body>
</html>