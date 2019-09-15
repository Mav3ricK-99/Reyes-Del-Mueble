<?php
        if(isset($_GET['contraseniaid']))
		{
		$passid=$_GET['contraseniaid'];
		if(empty($passid)||$passid==""){echo "ID vacio ;)";die();}
		require_once('../conexion.php');
		$consultap=$conexion->query("SELECT * FROM usuarios WHERE contraseniaid='$passid'");
		if($consultap->num_rows==0){echo "No se han encontrado usuarios con la peticion de cambiar la contraseña. Si cree que fue un error, ingrese el email nuevamente.";die();}
		if(!$consultap){echo "No se ha podido establecer la peticion al servidor";die();}
		$usuariop=$consultap->fetch_array();
		echo "Ingrese su nueva contraseña ".$usuariop['usuario'];
		?>
		<form action="#" method="POST">
		<input type="hidden" name="email" value="<?php echo $usuariop['mail']; ?>">
		<input type="hidden" name="user" value="<?php echo $usuariop['usuario']; ?>">
		<input type="password" name="pass1" placeholder="Ingrese su nueva contraseña">
		<input type="password" name="pass2" placeholder="Ingrese su contraseña por segunda vez">
		<input type="submit" name="cambiarcontraseña" value="Cambiar contraseña">
		</form>
		<?php
		}
		if(isset($_POST['enviar']))
        {
			
        require_once('../conexion.php');
		$email=$_POST['email'];
        $consulta=$conexion->query("SELECT * FROM usuarios WHERE mail='$email' OR usuario='$email' ");
		if($consulta->num_rows==0){echo 0;die();}
		if(!$consulta){echo 0;die();}
		$usuario=$consulta->fetch_array();
		$email=$usuario['mail'];
		$usuario=$usuario['usuario'];
		$contraseniaid=uniqid();
		$sqlid="UPDATE usuarios SET contraseniaid='$contraseniaid' WHERE mail='$email' OR usuario='$email' ";
		$insertid=$conexion->query($sqlid);
		$mensaje = "<html><body><meta charset='utf-8'>";
		$mensaje .= "<h2>Que tal, ".$usuario." necesitas cambiar la contraseña?</h2><a href='https://reyesdelmueble1.000webhostapp.com/includes/accounts/emailpass.php?contraseniaid=".$contraseniaid."'>Cambiar Contraseña</a>";
        $mensaje .= "<style>
					a{color:black;text-decoration:none;}
					body{font-family:'Arial';}
					</style>";
		$mensaje .= "</body></html>";
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		$emailpass=mail("$email","Reyes Del Mueble - Olvido de Contraseña",$mensaje,$headers);
		if(!$emailpass){echo 3;die();}
		echo 1;
		}
		if(isset($_POST['cambiarcontraseña']))
		{
			if($_POST['pass1']==$_POST['pass2'])
			{
			$emailp=$_POST['email'];
			$userp=$_POST['user'];
			$pass1=$_POST['pass1'];
			require_once('../conexion.php');
			$sqlp="UPDATE usuarios SET contrasenia='$pass1', contraseniaid='' WHERE usuario='$userp' AND mail='$emailp'";
			$cambiarp=$conexion->query($sqlp);
		    echo "<script type='text/javascript'>window.location.href = 'https://reyesdelmueble1.000webhostapp.com/index.php';</script>";
		    if(!$cambiarp){echo "Error al actualizar contraseña, intentelo nuevamente";}
			}
			else
			{
				echo "Las contraseñas no coinciden";
			}
		}