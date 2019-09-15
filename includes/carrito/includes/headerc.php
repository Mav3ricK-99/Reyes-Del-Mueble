<link rel="shortcut icon" href="../../favicon.png" />
	 	<link rel="stylesheet" type="text/css" href="../../css/header.css"> 
   		<link rel="stylesheet" type="text/css" href="../../css/style.css">
	 	<link rel="stylesheet" type="text/css" href="../../css/carrito.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
		<header class="header2" id="myHeader">
		<div id="logo">
		<a href="../../index.php"><img src="../../Imagenes/logofinal.png" class="logofinal"></a>	
        </div>
		<input type="checkbox" id="btn-menu">
        <label for="btn-menu" class="icon-paragraph-justify"></label>
		<nav class="menu" >
		    <ul class="nul" style="margin-top:-.7px;">
                <li><a href="../../index.php">Inicio</a></li>
                <li class="submenu"><a href="javascript:void(0)">Productos<span class="icon-arrow-down2"></span></a>
                <ul>
                    <li><a href="../../comedor.php">Comedor</a></li>
                    <li><a href="../../living.php">Living</a></li>
                    <li><a href="../../dormitorio.php">Dormitorio</a></li>
                    <li><a href="../../oficina.php">Oficina</a></li>
                    <li><a href="../../decoracion.php">Decoracion</a></li>
				</ul>
                </li>
                <li><a href="../../somos.php">Historia</a></li>
                <li><a href="../../locales.php">Locales</a></li>
                <li><a href="../../contacto.php">Contacto</a></li>
		    </ul>
		<div class="cuenta">
		<ul class="cul">
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
		<a href="#">Carrito 
		<i class="fas fa-shopping-cart"></i></a>	
		</li>
			<hr>
		<li id='config'>
		<a href="javascript:void(0)">Configuracion 
		<i class="fas fa-user-cog"></i>
		</a>
		<ul id="submenuconfig">
           <li style="margin-top:7px;"><a href="#" title="Ajustes cuenta">Cuenta</a></li>
           <li><a href="../../perfil.php">Perfil</a></li>
           <li><a href="../../contacto.php">Contacto</a></li>
           
		</ul>
		</li><hr>
		<li id='salir'>
		<a href="../../includes/accounts/unlog.php">Cerrar sesion</a>
		</li>
		</ul>
		</div>
		</nav>
		
		<script type="text/javascript" src="../../js/main.js"></script>
    </header>