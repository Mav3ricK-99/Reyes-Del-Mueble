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
function ListProduct($t1, $t2, $t3, $pagina, $inicio, $conexion,$Tamano_pagina,$p)
{   
    $obtener_todo = "SELECT * FROM muebles WHERE tipos=$t1 OR tipos=$t2 OR tipos=$t3";
    $consulta4=$conexion->query($obtener_todo);
    $num_total_registros = $consulta4->num_rows;
    $consulta_resultados = mysqli_query($conexion, "
    SELECT * FROM `muebles` WHERE tipos=$t1 OR tipos=$t2 OR tipos=$t3 ORDER BY RAND() ASC LIMIT $inicio, $Tamano_pagina");
    $total_paginas = ceil($num_total_registros / $Tamano_pagina);
	while($datos=$consulta_resultados->fetch_assoc())
    {
 	$p=$p+1;
    include 'mostrar.php';
    }
	$consulta_resultados->free();
    return $total_paginas;
}
    $total_paginas=ListProduct($t2,$t2,$t3, $pagina, $inicio, $conexion,$Tamano_pagina,$p);
	unset($GLOBALS['p']);

?> 