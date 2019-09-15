<?php
require_once('../includes/conexion.php');
$sql="SELECT * FROM muebles";

if(isset($_GET['f']))
{
	$filtro=$_GET['f'];
    if($filtro=='pago')
	{
	$sql2="SELECT * FROM muebles ORDER BY pago DESC";
	$consulta4=$conexion->query($sql2);
    $num_total_registros = $consulta4->num_rows;
    $sql="SELECT * FROM muebles ORDER BY $filtro DESC " . " LIMIT " . $inicio . "," . $Tamano_pagina;
    $total_paginas = ceil($num_total_registros / $Tamano_pagina); 
    }
	else
	{
    $sql2="SELECT * FROM muebles ORDER BY $filtro";
    $consulta4=$conexion->query($sql2);
    $num_total_registros = $consulta4->num_rows;
    $sql="SELECT * FROM muebles ORDER BY $filtro " . " LIMIT " . $inicio . "," . $Tamano_pagina;
    $total_paginas = ceil($num_total_registros / $Tamano_pagina); 
    }
}
if(isset($_GET['catego']))
{ 
    
    $catego=$_GET['catego'];
    if($catego=="Todos")
        {
        $sql="SELECT * FROM muebles";
        $consulta4=$conexion->query($sql);
        $num_total_registros = $consulta4->num_rows;
        $sql="SELECT * FROM muebles" . " LIMIT " . $inicio . "," . $Tamano_pagina;
        }
    
    else
    {
        if($catego==1)
        {
            $sql="SELECT * FROM muebles WHERE tipos=1 OR tipos=2 OR tipos=3";
            $consulta4=$conexion->query($sql);
            $num_total_registros = $consulta4->num_rows;
            $sql="SELECT * FROM muebles WHERE tipos=1 OR tipos=2 OR tipos=3 " . " LIMIT " . $inicio . "," . $Tamano_pagina;
        }
        else
        {
            $catego2=$catego+1;
            $sql="SELECT * FROM muebles WHERE tipos='$catego' OR tipos='$catego2' ";
            $consulta4=$conexion->query($sql);
            $num_total_registros = $consulta4->num_rows;
            $sql="SELECT * FROM muebles WHERE tipos='$catego' OR tipos='$catego2' " . " LIMIT " . $inicio . "," . $Tamano_pagina;
        }
    }   
    $total_paginas = ceil($num_total_registros / $Tamano_pagina);
}
if(isset($_GET['catego'])&&isset($_GET['f']))
{
    
    $filtro=$_GET['f'];
    $catego=$_GET['catego'];
    
    if($catego=='Todos')
        {
            $sql="SELECT * FROM muebles ORDER BY $filtro";
            $consulta4=$conexion->query($sql);
            $num_total_registros = $consulta4->num_rows;
            $sql="SELECT * FROM muebles ORDER BY $filtro" . " LIMIT " . $inicio . "," . $Tamano_pagina;
        }
    else
    {
        if($catego==1)
            {
        $sql="SELECT * FROM muebles WHERE tipos=1 OR tipos=2 OR tipos=3 ORDER BY $filtro";
        $consulta4=$conexion->query($sql);
        $num_total_registros = $consulta4->num_rows;
        $sql="SELECT * FROM muebles WHERE tipos=1 OR tipos=2 OR tipos=3 ORDER BY $filtro" . " LIMIT " . $inicio . "," . $Tamano_pagina;
            }
        
        else
        {
        $catego2=$catego+1;
        $sql="SELECT * FROM muebles WHERE tipos='$catego' OR tipos='$catego2' ORDER BY $filtro ";
        $consulta4=$conexion->query($sql);
        $num_total_registros = $consulta4->num_rows;
        $sql="SELECT * FROM muebles WHERE tipos='$catego' OR tipos='$catego2' ORDER BY $filtro" . " LIMIT " . $inicio . "," . $Tamano_pagina;
        }
    }
    $total_paginas = ceil($num_total_registros / $Tamano_pagina);    
}

$consulta=$conexion->query($sql);

?>