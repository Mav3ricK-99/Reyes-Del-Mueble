<?php
	if(isset($_GET['f']))
	{
    $filtro=$_GET['f'];
    $sql2="SELECT * FROM contacto ORDER BY $filtro";
    $consulta4=$conexion->query($sql2);
    $num_total_registros = $consulta4->num_rows;
    $sql="SELECT * FROM contacto ORDER BY $filtro " . " LIMIT " . $inicio . "," . $Tamano_pagina;
    $total_paginas = ceil($num_total_registros / $Tamano_pagina); 
    $res=$conexion->query($sql);
	}

if(isset($_GET['catego']))
{ 
    $catego=$_GET['catego'];
    if($catego=="Todos")
        {
        $sql="SELECT * FROM contacto";
        $consulta4=$conexion->query($sql);
        $num_total_registros = $consulta4->num_rows;
        $sql="SELECT * FROM contacto" . " LIMIT " . $inicio . "," . $Tamano_pagina;
        }
    
    else
    {
            $sql="SELECT * FROM contacto WHERE asunto='$catego'";
            $consulta4=$conexion->query($sql);
            $num_total_registros = $consulta4->num_rows;
            $sql="SELECT * FROM contacto WHERE asunto='$catego' " . " LIMIT " . $inicio . "," . $Tamano_pagina;
    }   
    $total_paginas = ceil($num_total_registros / $Tamano_pagina);
}
if(isset($_GET['catego'])&&isset($_GET['f']))
{
    
    $filtro=$_GET['f'];
    $catego=$_GET['catego'];
    
    if($catego=='Todos')
        {
            $sql="SELECT * FROM contacto ORDER BY $filtro";
            $consulta4=$conexion->query($sql);
            $num_total_registros = $consulta4->num_rows;
            $sql="SELECT * FROM contacto ORDER BY $filtro" . " LIMIT " . $inicio . "," . $Tamano_pagina;
        }
    else
    {
    $sql="SELECT * FROM contacto WHERE asunto='$catego' ORDER BY $filtro";
    $consulta4=$conexion->query($sql);
    $num_total_registros = $consulta4->num_rows;
    $sql="SELECT * FROM contacto WHERE asunto='$catego' ORDER BY $filtro" . " LIMIT " . $inicio . "," . $Tamano_pagina;
    $total_paginas = ceil($num_total_registros / $Tamano_pagina);    
	}
}
$res=$conexion->query($sql);

?>