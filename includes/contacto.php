<?php
if(isset($_POST['enviar']))
  {
	session_start();
	$n=$_POST['n'];
    $a=$_POST['a'];
    $e=$_POST['e'];
    $t=$_POST['t'];
    $s=$_POST['s'];
    $m=$_POST['m'];
	$nombre=$n." ".$a;
    require_once ('conexion.php');
	if(isset($_SESSION['user']))
	{
		$user=$_SESSION['user'];
		$insert="INSERT INTO `contacto` (`id_mensaje`, `id_usuario`, `nombre_apellido`, `email`, `telefono`, `asunto`, `mensaje`) VALUES (NULL, '$user', '$nombre', '$e', '$t', '$s', '$m');";
		$mensaje = "<html><body><h4>".$nombre." Ha hecho una consulta,
		Su nombre de usuario es ".$user."</h4>";
	}
	 else{
		  $insert="INSERT INTO `contacto` (`id_mensaje`, `id_usuario`, `nombre_apellido`, `email`, `telefono`, `asunto`, `mensaje`) VALUES (NULL, '', '$nombre', '$e', '$t', '$s', '$m');";
	 	  $mensaje = "<html><body><h4>".$nombre." Ha hecho una consulta!</h4>";
	 }
	$res=$conexion->query($insert);
	$mensaje .= "Email: ".$e."<br>Telefono: ".$t." <br>Asunto:".$s."<br><br>Mensaje: ".$m;
   	$mensaje .= "</body></html>";
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	$email=mail("reyesdelpino5@gmail.com","Reyes del Mueble - Consultas usuarios",$mensaje,$headers);
    if($res&&$email)
	{
		echo "1";//Mensaje enviado con exito;
	}else{echo "0";}//Error al enviar el mensaje;
  }
?>