<?php
if(isset($_POST['rango']))
{
	require_once('conexion.php');
	$precio=$_POST['rango'];
	$precio0=$precio-1000;
	$query="SELECT * FROM muebles WHERE precio BETWEEN '$precio0' AND '$precio'";
    $resultado=$conexion->query($query);
	$GLOBALS['p']=0;
	$html="";
	$data = [];
    while($datos=$resultado->fetch_assoc())
    {
		$p=$p+1;
		 $html.="asd";
    }
	unset($GLOBALS['p']);
	$resultado->free();
	echo $html;
	
}

?>