<?php	

		if(isset($_POST['regis']))
		{	
			require('../conexion.php');
			if($_POST['passwordr1'] != $_POST['passwordr2'])
			{echo 3;die();}//CONTRASEÑAS NO COINCIDEN
			if(strlen($_POST['passwordr1'])<7){echo 6;die();}
			$email=$_POST['email'];
			$verifsql="SELECT * FROM usuarios WHERE mail='$email' ";
			$verif=$conexion->query($verifsql);
			if($verif->num_rows==1)
			{echo 4;die();}//USER YA REGISTADO
			$verif->free();
			$existeyasql="SELECT * FROM registros WHERE mail= '$email'";
			$nope=$conexion->query($existeyasql);
			if($nope->num_rows==1){echo 5;die();}//USER YA EN TABLA REGISTROS
			$nope->free();
			/////////////////////////////////////////////////////////////
			$n=$_POST['nombre'];
			$nu=$_POST['nombrer'];
			$c1=$_POST['passwordr1'];
			$chkk=$_POST['chkk'];
			$fechan=$_POST['fechan'];
			$dob = strtotime($fechan);
			$ahora = time();
			$difer = $ahora - $dob;
 			$edad = floor($difer / 31556926);
 			if($edad<18){echo 2;die();}//MENOR DE EDAD
			$id=uniqid();
			$insertar="INSERT INTO registros (nombre_apellido,fecha_nac,usuario,contrasenia,codigo,fecha_registro,mail,news) VALUES('$n','$fechan','$nu','$c1', '$id',CURDATE(), '$email', '$chkk')";
			$resultado=$conexion->query($insertar);
			if(!$resultado){echo 1;die();}//ERROR AL INSERTAR
			$mensaje = "<html><body><h4>Necesitamos que confirmes tu registro ".$n."</h4>";
            $mensaje .= "<a href='https://reyesdelmueble1.000webhostapp.com/includes/accounts/reg.php?j=".$id."'>Confirmacion de cuenta</a>";
            $mensaje .= "</body></html>";
            $headers = "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			$ee=mail("$email","Rey del Mueble - Validacion de la cuenta",$mensaje,$headers);
			if($ee)
			{
				echo 10;
			}
			
		    $conexion->close();
		}
		
	if(isset($_GET['j']))
	{
		require('../conexion.php');
		$idj=$_GET['j'];
		$sql="SELECT * FROM registros WHERE codigo='$idj'";
		$select=$conexion->query($sql);
		if($select->num_rows==0)
		{echo "<script type='text/javascript'>alert('No se han encontrado registros con esta ID, intente reenviar el formulario');window.location.href = 'https://reyesdelmueble1.000webhostapp.com/';</script>";die();
		}
		elseif($select->num_rows==1)
		{
			$reg=$select->fetch_array();
			$borrar_r=$reg['id_usuario'];
			$nombre_r=$reg['nombre_apellido'];
			$fecha_r=$reg['fecha_nac'];
			$user_r=$reg['usuario'];
			$pass_r=$reg['contrasenia'];
			$news_r=$reg['news'];
			$mail_r=$reg['mail'];
			$sqli="INSERT INTO usuarios (nombre_apellido,fecha_nac,usuario,contrasenia,news,mail) VALUES('$nombre_r', '$fecha_r', '$user_r', '$pass_r', '$news_r', '$mail_r')";
			$insert=$conexion->query($sqli);
			$sql="DELETE FROM registros WHERE id_usuario='$borrar_r'";
			$borrarr=$conexion->query($sql);
		}
		if($sqli)
		{header("Location: https://reyesdelmueble1.000webhostapp.com?regx=".$nombre_r."");}
		$select->free();
		$conexion->close();
	}


?>	