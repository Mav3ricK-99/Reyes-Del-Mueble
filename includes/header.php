	<?php 
	require("conexion.php");
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
{	?>

		<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/header.css"> 
   		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
		<header class="header2" id="myHeader">
		<div id="logo">
		<a href="index.php"><img src="Imagenes/logofinal.png" class="logofinal"></a>	
        </div>
		<input type="checkbox" id="btn-menu">
        <label for="btn-menu" class="icon-paragraph-justify"></label>
		<nav class="menu" style="align-self:flex-end">
		    <ul class="nul">
                <li><a href="index.php">Inicio</a></li>
                <li class="submenu"><a href="javascript:void(0)" >Productos<span class="icon-arrow-down2"></span></a>
                <ul>
                    <li><a href="comedor.php">Comedor</a></li>
                    <li><a href="living.php">Living</a></li>
                    <li><a href="dormitorio.php">Dormitorio</a></li>
                    <li><a href="oficina.php">Oficina</a></li>
                    <li><a href="decoracion.php">Decoracion</a></li>
				</ul>
                </li>
                <li><a href="somos.php">Historia</a></li>
                <li><a href="locales.php">Locales</a></li>
                <li><a href="contacto.php">Contacto</a></li>
		    </ul>
		<div class="cuenta">
		<ul class="cul">
		<li id='usern'>
			<?php $name=strtoupper($_SESSION['user']);
			echo $name{0}.$name{1}.$name{2}.$name{3};?>
		<i class="fas fa-user"></i>
		</li>
			<hr>
			<?php
 			if(isset($_SESSION['lista'])&&isset($_SESSION['lista2']))
			{
			    echo "<li class='subnoti' id='noti'>";
			echo "<a href='javascript:void(0)'>+1 Notificaciones 
			<i class='fas fa-envelope'></i></a>
			 <ul id='subnotii'>";
			echo "<li>Compra finalizada de los articulos:<br>";
			foreach($_SESSION["lista"] as $key => $value)
			{
			echo $value."<br>";
            }
            echo $_SESSION['lista2'];
			echo "</li>";
            echo "</ul>";
            $_SESSION['lista']=null;
            $_SESSION['lista2']=null;
			}
			$noti0=0;
 			if(isset($_SESSION['lista']))
			{
			$noti0=1;
			echo "<li class='subnoti' id='noti'>";
			echo "<a href='javascript:void(0)'>+1 Notificaciones 
			<i class='fas fa-envelope'></i></a>
			 <ul id='subnotii'>";
			echo "<li>Compra finalizada de los articulos:<br>";
			foreach($_SESSION["lista"] as $key => $value)
			{
			echo $value."<br>";
            }
			echo "</li>";
            echo "</ul>";
			}
 			if(isset($_SESSION['lista2']))
			{
			$noti0=1;
			echo "<li class='subnoti' id='noti'>";
			echo "<a href='javascript:void(0)'>+1 Notificaciones 
			<i class='fas fa-envelope'></i></a>
			 <ul id='subnotii'>";
			echo "<li>Compra finalizada del articulo<br>";
			echo $_SESSION['lista2'];
			echo "</li>";
            echo "</ul>";
			}
 			if(!isset($_SESSION['lista'])&&!isset($_SESSION['lista2'])&&$noti0==0){
			echo "<li id='noti'>";
			echo "<a href='#'>Notificaciones 
			<i class='fas fa-envelope'></i></a>";
			}
 			?>
		
		</li>
			<hr>
		<li id='carr'>
		<a href="includes/carrito/carritoga.php">Carrito 
		<i class="fas fa-shopping-cart"></i></a>	
		</li>
			<hr>
		<li id='config'>
		<a href="javascript:void(0)">Configuracion 
		<i class="fas fa-user-cog"></i>
		</a>
		<ul id="submenuconfig">
           <li style="margin-top:7px;"><a href="#" title="Ajustes cuenta">Cuenta</a></li>
           <li><a href="perfil.php">Perfil</a></li>
           <li><a href="contacto.php">Contacto</a></li>
           
		</ul>
		</li><hr>
		<li id='salir'>
		<a href="includes/accounts/unlog.php">Cerrar sesion</a>
		</li>
		</ul>
		</div>
		</nav>
		
		<script type="text/javascript" src="js/main.js"></script>
    </header>
	<?php
} 
else
{	?>
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/header.css"> 
   	<link rel="stylesheet" type="text/css" href="css/style.css"> 
    <header class="header2" id="myHeader">
        <input type="checkbox" id="btn-menu">
        <label for="btn-menu" class="icon-paragraph-justify"></label>
        <div id="logo">
		<a href="index.php"><img src="Imagenes/logofinal.png" class="logofinal"></a>	
        </div>
		<nav class="menu">
            <ul class="nul">
                <li><a href="index.php">Inicio</a></li>
                <li class="submenu"><a href="javascript:void(0)">Productos<span class="icon-arrow-down2"></span></a>
                <ul> 
                    <li><a href="comedor.php">Comedor</a></li>
                    <li><a href="living.php">Living</a></li>
                    <li><a href="dormitorio.php">Dormitorio</a></li>
                    <li><a href="oficina.php">Oficina</a></li>
                    <li><a href="decoracion.php">Decoracion</a></li>
				</ul>
                </li>
                <li><a href="somos.php">Historia</a></li>
                <li><a href="locales.php">Locales</a></li>
                <li><a href="contacto.php">Contacto</a></li>
				<li><a href="javascript:void(0)" onclick="mlogin(this);" id="in">Iniciar Sesion</a></li>
            </ul> 
			<div class="login">
			<h2 id="h2s">Inicia Sesion</h2>
			<form method="post" id="form">
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
				<a href='includes/loginform.php?r'>Registrarse</a></div>
			</div>
        </nav>
		
		<script type="text/javascript" src="js/main.js"></script>
    </header>
	
	<?php
}

