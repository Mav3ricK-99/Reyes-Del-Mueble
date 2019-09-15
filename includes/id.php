<?php
$prod=$_GET['id_mueble'];
$tipo=$_GET['tipos'];
$query="SELECT * FROM muebles WHERE id_mueble=$prod";
$resultado=$conexion->query($query);
$query3="SELECT t.tipo FROM muebles m JOIN tipo t ON $tipo=t.id_tipo";
$resultado3=$conexion->query($query3);
$row3=$resultado3->fetch_assoc();
$row=$resultado->fetch_assoc();
?>