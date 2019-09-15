<?php
    if(isset($_POST['enviar'])){
    require_once('../includes/conexion.php');
    $id=$_POST['id'];$nombre=$_POST['nombre'];$precio=$_POST['precio'];   
    $desc=$_POST['descripcion'];$color=$_POST['color'];$alto=$_POST['alto'];                     $ancho=$_POST['ancho'];$medida=$ancho."x".$alto;$tipo=$_POST['tipos'];
    ////////////////////////////////////////////////////////////////////////////////////
    if(empty($_FILES['imagen']['name']))
    {
    $sqll="UPDATE muebles SET nombre='$nombre', descripcion='$desc', precio='$precio',color='$color', medida='$medida', tipos='$tipo' WHERE id_mueble=$id";
    $upd2=$conexion->query($sqll);
    if(!$upd2)
    {echo "<script type='text/javascript'> alert('Hubo un error al Actualizar datos en el registro N°    ".mysqli_errno($conexion)."');</script>".mysqli_close($conexion);die();}
    }
    else
    {
    $exts = $_FILES['imagen']['type'];    
    if($exts=='image/png'||$exts=='image/jpg'||$exts=='image/jpeg')
    {
    include_once('redimensionarImg.php');
    $dir_subida = '../Imagenes/Temp/';
    $ficherotemp = $dir_subida.time()."-".basename($_FILES['imagen']['name']);
		
    if (move_uploaded_file($_FILES['imagen']['tmp_name'], $ficherotemp)) 
    { 
        if($rutafinal=redimensionarImg($ficherotemp,640,360))
        {
            unlink($ficherotemp);
            $sqldel="SELECT imagen FROM muebles WHERE id_mueble=$id";
            $delimg=$conexion->query($sqldel);
            $rowdel=$delimg->fetch_row();
			if (file_exists("../".$rowdel[0])){unlink("../".$rowdel[0]);}}
     }
     else
     {
     echo "<script type='text/javascript'> alert('Hubo un problema al Redimencionar la Imagen');</script>".mysqli_close($conexion);die();
     }    
     $sqll="UPDATE muebles SET nombre='$nombre', descripcion='$desc', precio='$precio',color='$color', imagen='$rutafinal', medida='$medida', tipos='$tipo' WHERE id_mueble=$id";
     $upd=$conexion->query($sqll);
     if(!$upd)
     {echo "<script type='text/javascript'> alert('Hubo un error al Actualizar datos en el registro N°    ".mysqli_errno($conexion)."');</script>".mysqli_close($conexion);die();}
     }
     else
     {echo "<script type='text/javascript'> alert('Tipo de Archivo Incorrecto');</script>".mysqli_close($conexion);die();}
     } 
	echo "<script type='text/javascript'>window.location.href='admindoc.php?pagina=".$_POST['pagm']."'</script>";mysqli_close($conexion);die();
    }
?>