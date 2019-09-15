<?php 
$conexion=new mysqli("localhost","id7803858_fede","RiverPlate","id7803858_reyesdelmueble")
or die (mysqli_error());

    if(!$conexion)
    { 
        echo "<script type='text/javascript'> alert('Hubo un error al Conectarse con la base de datos N°   ".mysqli_errno($conexion)."');</script>";die();
    }


?>