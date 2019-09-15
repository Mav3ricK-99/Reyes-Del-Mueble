<?php
if(isset($_GET['e']))
{
include_once('../includes/conexion.php');
$d=$_GET['e'];
$n=$_GET['n'];
$imgn="SELECT imagen FROM muebles WHERE id_mueble=$d";
$imgr=$conexion->query($imgn);
$row=$imgr->fetch_row();
unlink("../".$row[0]);
$sql="DELETE FROM muebles WHERE id_mueble=$d";
$del=$conexion->query($sql);
if(!$del)
    {
         echo "<script type='text/javascript'> alert('Hubo un error al Borrar el registro N°   ".mysqli_errno($conexion)."');</script>";die();
    }

echo '<script type="text/javascript">alert("El registro N° ' .$d. ' \nNombre:  ' .$n. ' se ha eliminado con exito");</script>';    
echo "<script type='text/javascript'> window.location.replace('admindoc.php');</script>";
}
mysqli_close($conexion);
die();
?>