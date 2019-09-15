<?php session_start();
if(isset($_SESSION['user']))
{header("Location: ../index.php");die();}
?>
<!DOCTYPE html>
 <html lang="es">
<head>
    <title>Ingresar - Reyes del Mueble</title>
    <link rel="shortcut icon" href="../favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/logyreg.css">
	<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
	<meta charset="UTF-8">
</head> 
	
<body>
	<section class="main">
		<article class="submain">
		<div class="but">
		<h1 id="l" onclick="noreg(this);">Ingresar</h1>
		<hr id="hr">
		<h1 id="r" onclick="nologin(this);">Registrarse</h1>
		</div>
		</article>
		<article class="registro" id="idreg">
		<h2 id="h2reg">Registro</h2>
		<span id="error"></span>
		<form method="POST" id="regform">
		<div class="group">      
      	<input type="text" class="input" id="nombre" required>
      	<span class="bar"></span>
      	<label id="label">Ingrese su nombre y apellido</label>
    	</div>
		<div class="group">      
      	<input type="text" class="input" id="nombrer" required>
      	<span class="bar"></span>
      	<label id="label">Ingrese un nombre de usuario</label>
    	</div>
		<div class="group">      
		<input type="email" class="input" id="email" required placeholder="Ingrese su direccion de email">
      	<span class="bar"></span>
      	
    	</div>
		<div class="group">      
      	<input  type="password" id="passwordr1" autocomplete="off" class="input" required>
      	<span class="bar"></span>
      	<label id="label">Ingrese su Contraseña.</label>
    	</div>
		<div class="group">      
      	<input  type="password" id="passwordr2" autocomplete="off" class="input" required>
      	<span class="bar"></span>
      	<label id="label">Ingrese nuevamente su contraseña.</label>
    	</div>
		<input type="date" id="fechan">
		<div class="pino">
		<input id="chkk" type="checkbox" /><label for="chkk" id="labelp">Desea participar de la seccion PinoNews?</label><a href="javascript:void(0)" onclick="que(this);" id="que">¿Que es esto?</a><aside id="queid" style="display:none"></aside>
		</div>
		<div class="sim-button button8" id="br"><input type="submit" id="regis" value="Registrarse" name="Registrarse"></div>	
		</form>
		</article>
		<article class="login" id="idlog">
		<h2>Ingresar</h2>
		<form method="post" id="loginf">
		<div class="group">      
      	<input type="text" required id="nlogin" class="input">
      	<span class="bar"></span>
      	<label id="label">Nombre de usuario</label>
    	</div>
		<div class="group">      
      	<input type="password" autocomplete="current-password" class="input" id="plogin" required>
      	<span class="bar"></span>
      	<label id="label">Ingrese su contraseña</label>
    	</div>
		<input id="chk" type="checkbox" /><label for="chk">Recordar mis datos</label>
		<div class="sim-button button8"><input type="submit" id="ingres" value="Ingresar" name="Ingresar"></div>	
		</form>
		<div id="errorsmg" class="nomostrar">Al parecer has ingresado mal los datos, intentalo nuevamente.</div>
		<div class="recup">
			<a href="accounts/olvidopass.php">Recuperar contraseña.</a>
		</div>
		</article>
	</section>
	 <?php
	 if(isset($_GET['r']))
	 {	
	 ?>
	 <title>Registro - Reyes del Mueble</title>
	 <script type="text/javascript">
		 $('#idlog').addClass('nologin');
		 $('#idreg').addClass('sireg');
	 </script>
	 <?php	
	 }
	 ?>
	<script type="text/javascript" src="../js/log.js"></script>
	<footer>
		<div class="footer1">
	<ul>
		<li><a href="../index.php">Inicio</a></li>
		<li id="inicio"><a>Productos</a></li>
		<li style="color:#bebee5;">-</li>
		<li><a href="../comedor.php">Comedor</a></li>
		<li><a href="../living.php">Living</a></li>
		<li><a href="../dormitorio.php">Dormitorio</a></li>
		<li><a href="../oficina.php">Oficina</a></li>
		<li><a href="../decoracion.php">Decoracion</a></li>
		<li id="local"><a href="../locales.php">Locales</a></li>
		<li><a href="../contacto.php">Contacto</a></li>
		<li><a href="accounts/olvidopass.php">¿Olvidaste tu contraseña?</a></li>
		
	</ul>
		</div>
	<div class="credits">
	 &copy; 2018, todos los derechos reservados - | Reyes del Mueble |.	
	</div>
	</footer>
	<div style="display:none">
		
</body>
	 
</html>