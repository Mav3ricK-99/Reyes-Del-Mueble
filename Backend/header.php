<?php 
	require("../includes/conexion.php");
	$log=0;
if(!isset($_SESSION['user']))
{
	if(isset($_COOKIE['sessionid'])&&isset($_COOKIE['user_n']))
	{
		
		$user=$_COOKIE['user_n'];
		$ssid=$_COOKIE['sessionid'];
		$sql="SELECT * FROM usuarios WHERE usuario='$user' AND sessionid='$ssid'";
		$resp=$conexion->query($sql);
		$row=$resp->fetch_array();
		//No hay SESSION. Hay cookies, iguales que en la DB, se logea.
		$_SESSION['id_user']=$row['id_usuario'];
		$_SESSION['user']=$row['usuario'];
		$_SESSION['mail']=$row['mail'];
		$_SESSION['news']=$row['news'];
		if(isset($_SESSION['user'])&&isset($_COOKIE['carrito']))
		{$_SESSION['carrito']= unserialize($_COOKIE['carrito']);}
		//ELSE {No hay SESSION. Hay cookies, distintas que en la DB, no se logea.}
	}
	//ELSE {No hay SESSION. NO Hay cookies, no se logea.}
}//ELSE {Hay SESSION, se logea.}
 
		 	

if(isset($_SESSION['user']))
{	
?>
<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/header.css"> 
   	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <header class="header2" id="myHeader">
		<div id="logo">
		<a href="../index.php"><img src="../Imagenes/logofinal.png" class="logofinal"></a>	
        </div>
		<input type="checkbox" id="btn-menu">
        <label for="btn-menu" class="icon-paragraph-justify"></label>
		<nav class="menu" style="align-self:flex-end;width:auto">
		    <ul class="nul">
                <li><a href="../index.php" style="padding: 21px;">Inicio</a></li>
				<li class="submenu"><a href="javascript:void(0)" id="pro">Productos<i class="fas fa-couch"></i></a>
                <ul> 
                    <li><a href="tabla.php" id="pa">Agregar un Producto</a></li>
                    <li><a href="admindoc.php" id="pa">Tabla de Productos</a></li>
                </ul>
                </li>
                <li><a href="ventas.php">Ventas<i class="fas fa-chart-bar"></i></a>
                </li>
				<li class="submenu"><a href="javascript:void(0)" id="c">Cuentas<i class="fas fa-user"></i></a>
                <ul> 
                    <li><a href="usuarios.php" id="usu">Usuarios</a></li>
                    <li><a href="registros.php" id="usu">Registros</a></li>
                </ul>
                </li>
				<li class="submenu"><a href="javascript:void(0)" id="pi">PinoNews<i class="fas fa-envelope"></i></a>
                <ul> 
					<li><a href="npnew.php" id="pino">Redactar una Pnews</a></li>
                    <li><a href="registrosp.php" id="pino">Registros PinoNews</a></li>
                    <li><a href="news.php" id="pino">Usuarios registrados PinoNews</a></li>
                </ul>
                </li>
				<li><a href="consultast.php" id="pi">Mensajes<i class="fas fa-comment"></i></a></li>
				</ul> 
		<div class="cuenta">
		<ul class="cul" style="max-width:auto">
		<li id='usern'>
		
		<?php $name=strtoupper($_SESSION['user']);
			echo $name{0}.$name{1}.$name{2}.$name{3};?>
		<i class="fas fa-user"></i>
		</li>
			<hr>
		<li id='noti'>
		<a href="#">Notificaciones 
		<i class="fas fa-envelope"></i></a>	
		</li>
			<hr>
		<li id='carr'>
		<a href="../includes/carrito/carritoga.php">Carrito 
		<i class="fas fa-shopping-cart"></i></a>	
		</li>
			<hr>
		<li id='config'>
		<a href="javascript:void(0)">Configuracion 
		<i class="fas fa-user-cog"></i>
		</a>
		<ul id="submenuconfig">
           <li style="margin-top:7px;"><a href="#" title="Ajustes cuenta">Cuenta</a></li>
           <li><a href="../perfil.php">Perfil</a></li>
           <li><a href="../contacto.php">Contacto</a></li>
           
		</ul>
		</li><hr>
		<li id='salir'>
		<a href="../includes/accounts/unlog.php">Cerrar sesion</a>
		</li>
		</ul>
		</div>
		</nav>
		
		<script type="text/javascript" src="../js/main.js"></script>
    </header>
<?php
}
else{
?>
<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/header.css"> 
   	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <header class="header2" id="myHeader">
        <input type="checkbox" id="btn-menu">
        <label for="btn-menu" class="icon-paragraph-justify"></label>
        <div id="logo">
		<a href="../index.php"><img src="../Imagenes/logofinal.png" class="logofinal"></a>	
        </div>
		<nav class="menu">
            <ul class="nul">
                <li><a href="../index.php" style="padding: 21px;">Inicio</a></li>
				<li class="submenu"><a href="javascript:void(0)" id="pro">Productos<i class="fas fa-couch"></i></a>
                <ul> 
                    <li><a href="tabla.php" id="pa">Agregar un Producto</a></li>
                    <li><a href="admindoc.php" id="pa">Tabla de Productos</a></li>
                </ul>
                </li>
                <li><a href="ventas.php">Ventas<i class="fas fa-chart-bar"></i></a>
                </li>
				<li class="submenu"><a href="javascript:void(0)" id="c">Cuentas<i class="fas fa-user"></i></a>
                <ul> 
                    <li><a href="usuarios.php" id="usu">Usuarios</a></li>
                    <li><a href="registros.php" id="usu">Registros</a></li>
                </ul>
                </li>
				<li class="submenu"><a href="javascript:void(0)" id="pi">PinoNews<i class="fas fa-envelope"></i></a>
                <ul> 
					<li><a href="npnew.php" id="pino">Redactar una Pnews</a></li>
                    <li><a href="registrosp.php" id="pino">Registros PinoNews</a></li>
                    <li><a href="news.php" id="pino">Usuarios registrados PinoNews</a></li>
                </ul>
                </li>
                <li><a href="consultast.php" id="pi">Mensajes<i class="fas fa-comment"></i></a></li>
                <li><a href="javascript:void(0)" onclick="mlogin(this);" id="in">Iniciar Sesion</a></li>
            </ul> 
			<div class="login">
			<h2 id="h2s">Inicia Sesion</h2>
			<form method="post" id="formb">
			<input type="text" placeholder="Ingrese su nombre de usuario" name='user' id="u"  autocomplete="off" required>
			<input type="password" placeholder="Ingrese su contraseña" name='pass' id="p"  required>
			<label id="error"></label>
			<div class="chk">
			<input type="checkbox" value="1" name="autov" class="form-checkbox" id="check-one"><label for="check-one">Acuérdate de mí</label>
			</div> 
			<div class="sim-button button7">
			<input type="submit" id="ingres" value="Ingresar" name="Ingresar">
			</div>
			</form>
			<hr>
			<div class="nocuenta">
				No tienes una cuenta?
				<a href='../includes/loginform.php?r'>Registrarse</a></div>
			</div>
        </nav>
		
		<script type="text/javascript" src="../js/main.js"></script>
    </header>
<?php
}