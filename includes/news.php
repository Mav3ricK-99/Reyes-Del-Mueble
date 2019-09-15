<?php session_start();
if(isset($_POST['Enviar']))
{
	if(!isset($_POST['mail'])||!isset($_POST['nombre'])||$_POST['nombre']==null||$_POST['mail']==null)
	{echo 0;die();}//No se han llenado los campos
	$mail=$_POST['mail'];
	$nombre=$_POST['nombre'];
	require('conexion.php');
	if(isset($_SESSION['user']))
	{ 
		if($_SESSION['mail']==$mail)
		{	
		$user=$_SESSION['user'];
		$sql="UPDATE usuarios SET news = 1 WHERE usuario='$user'";
	 	$insertnew=$conexion->query($sql);
			echo 1;//Alta con exito
		}
		else
		{
			echo 2;//No mail correspondiente al usuario
		}
	}
	else
	{	
		$verifsql="SELECT * FROM usuarios WHERE mail='$mail' ";
		$verif=$conexion->query($verifsql);
		if($verif->num_rows==1)
		{echo 4;die();}
		$verif->free();
		$existeyasql="SELECT * FROM news_table WHERE mail= '$mail'";
		$nope=$conexion->query($existeyasql);
		if($nope->num_rows==1){echo 5;die();}
		$nope->free();
		$existeyasql2="SELECT * FROM news_registros WHERE mail= '$mail'";
		$nope2=$conexion->query($existeyasql2);
		if($nope2->num_rows==1){echo 6;die();}
		$nope2->free();
		$keyregistro=uniqid();
		$sqli="INSERT INTO news_registros (nombre,mail,keyregistro,fecha_registro_news) VALUES ('$nombre', '$mail', '$keyregistro', CURDATE())";
		$insertnew=$conexion->query($sqli);
		$mensaje = "<html><body><h4>".$nombre."! Bienvenido a PinoNews!, haz click en el siguiente link para saber todas nuestras ofertas, novedades y mas!</h4>";
        $mensaje .= "<a href='https://reyesdelmueble1.000webhostapp.com/includes/news.php?key=".$keyregistro."'>Confirmar conocer todas nuestras ofertas!</a>";
        $mensaje .= "</body></html>";
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		$mail=mail("$mail","Reyes del Mueble - Confirmar PinoNews!",$mensaje,$headers);
		if($mail){echo 3;}//Email enviado
		
		
	}
	$conexion->close();
	
}
if(isset($_GET['key']))
{
	require('conexion.php');
	$key=$_GET['key'];
	$sql="SELECT * FROM news_registros WHERE keyregistro = '$key' ";
	$consulta=$conexion->query($sql);
	if($consulta->num_rows==0)
	{echo "<script type='text/javascript'>alert('No se han encontrado registros con esta ID, intente reenviar el formulario');window.location.href = 'https://reyesdelmueble1.000webhostapp.com/index.php';</script>";die();
	}
	elseif($consulta->num_rows==1)
	{
		$insertnew=$consulta->fetch_array();
		$borrar=$insertnew['id_newregistro'];
		$namen=$insertnew['nombre'];
		$mailn=$insertnew['mail'];
		$fechn=$insertnew['fecha_registro_news'];
		$sql="DELETE FROM news_registros WHERE id_newregistro='$borrar'";
		$borrarr=$conexion->query($sql);
		$sql="INSERT INTO news_table(nombre,mail,fecha_news) VALUES('$namen', '$mailn', '$fechn')";
		$insertr=$conexion->query($sql);
		header("Location: https://reyesdelmueble1.000webhostapp.com/index.php?ahora=".$namen."");
	
	}
	$consulta->free();
	
	
	
	
}






?>