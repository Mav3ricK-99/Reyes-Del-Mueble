<?php
      if(isset($_POST['insertar']))
	  {
          $nombre=$_POST['nombre'];$descripcion=$_POST['descripcion'];
          $precio=$_POST['precio'];$tipo=$_POST['tipos'];
          $color=$_POST['color'];$ancho=$_POST['ancho'];
          $alto=$_POST['alto'];$medida=$ancho."X".$alto;
          include_once('redimensionarImg.php');
          $dir_subida = '../Imagenes/Temp/';
          $ficherotemp = $dir_subida.time()."-".basename($_FILES['imagen']['name']);
          if (move_uploaded_file($_FILES['imagen']['tmp_name'], $ficherotemp)) 
             { 
                 if($rutafinal=redimensionarImg($ficherotemp,640,360))
                     {
                         unlink($ficherotemp);
                     }
             }
             else
             {
              echo "<script type='text/javascript'> alert('Hubo un problema al Redimencionar la Imagen');</script>";
              echo "<script type='text/javascript'> window.location.replace('admindoc.php');</script>";
              die();
             }    
          
$query="INSERT INTO muebles (nombre,descripcion,precio,imagen,color,medida,tipos,fecha)
VALUES('$nombre','$descripcion','$precio','$rutafinal','$color','$medida','$tipo',CURDATE())";
$resultado=$conexion->query($query);   
		if($resultado)
		{
            echo'<script type="text/javascript">
    		alert("Solicitud Enviada con exito");
    		window.location.href="admindoc.php";
    		</script>';
		}
		else
		{
			echo'<script type="text/javascript">
    		alert("La solicitud no pudo enviarse");
    		window.location.href="tabla.php";
    		</script>';
		}
    }
?>