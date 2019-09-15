<?php 
session_start();
if(isset($_SESSION['user']))
{
	echo "<script type='text/javascript'>window.location.href = 'https://reyesdelmueble1.000webhostapp.com/index.php';</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cambiar Contraseña - Reyes Del Mueble</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../../css/cambp.css">
	<link rel="shortcut icon" href="../../favicon.png" />
	<script src="../../js/vistart.js"></script>
</head>
<body>
	<script type="text/javascript" src="../../js/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../../css/header.css"> 
   	<link rel="stylesheet" type="text/css" href="../../css/style.css"> 
    <header class="header2" id="myHeader">
        <input type="checkbox" id="btn-menu">
        <label for="btn-menu" class="icon-paragraph-justify"></label>
        <div id="logo">
		<a href="../../index.php"><img src="../../Imagenes/logofinal.png" class="logofinal"></a>	
        </div>
		<nav class="menu">
            <ul class="nul">
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
				<li><a href="javascript:void(0)" onclick="mlogin(this);" id="in">Iniciar Sesion</a></li>
            </ul> 
			<div class="login">
			<h2 id="h2s">Inicia Sesion</h2>
			<form method="post" id="form2">
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
				<a href='loginform.php?r'>Registrarse</a></div>
			</div>
        </nav>
		
		<script type="text/javascript" src="../../js/main.js"></script>
    </header>
	
	<section id="section1">
		<article class="oform">
			<h3 id="oti">Recuperacion de contraseña</h3>
	<form id="form44">
		<input type="text" name="email" id="email" placeholder="Ingrese su email o nombre de usuario">
		<input type="submit" value="Enviar" id="enviar" name="enviar">
	</form>
		<div id="error2"></div>
		<ul id="listaf">
			<li>No puedes recuperar tu contraseña? <a href="../../contacto.php">Contactanos.</a></li>
			<li>Ingresar a la cuenta <a href="../loginform.php">Ingresar.</a></li>
			<li><a href="../loginform.php?r">Registrarse.</a></li>
		</ul>
		</article>
	</section>
	<script type="text/javascript" src="../../js/olvido.js"></script>
	<link rel="stylesheet" type="text/css" href="../../css/footer.css">
<footer> 
 <div class="footer-container">
 <div class="footer-main"> 
  <div class="footer-columna">
    <h3>Pino News</h3>
	 <p>Conoce todas las ofertas e Informate de las ultimas novedades</p>
   <form method="POST" id="newsform3">
   <input type="text" id="nombre" placeholder="Escriba su nombre" required>  
   <input type="email" id="mail" placeholder="Ingrese su correo" required>
   <input type="submit" id="Enviar" value="Enviar">
   </form>
	  <div class="np"></div>
  </div> 
  <div class="footer-columna"> 
        <h3>Cuenta</h3>
        <ul>
        <span class=""><li><a href="../../contacto.php"><p>Quejas</p></a></li></span>
		<?php
		if(isset($_SESSION['user']))
		{?>
		<span class=""><li><a href="perf.php"><p>Perfil</p></a></li></span>
		<span class=""><li><a href="#"><p>Cambiar Contraseña</p></a></li></span>
		<?php
		}
		else{
		?>
        <span class=""><li><a href="../loginform.php?r"><p>Crear cuenta</p></a></li></span>
		<span class=""><li><a href="#"><p>¿Olvidaste tu contraseña?</p></a></li></span>
		<?php } ?>
        <span class=""><li><a href="../../locales.php"><p>Locales</p></a></li></span>
        </ul>
  </div>
    <div class="footer-columna">
        <h3>Sobre Nosotros</h3>
        <p> Somos una compañía comercial que diseña y construye muebles para abastecer necesidades en materia de muebleria en los hogares, oficinas y todos aquellos espacios que deseen diseños exclusivos y confortables.¡ Reyes del Mueble, calidad garantizada! </p>
    </div>
  </div>
</div>
    
<div class="footer-copy-redes">
  <div class="main-copy-redes">
    <div class="footer-copy">

      &copy; 2018, todos los derechos reservados - | Reyes del Mueble |.
    <div class="imgf">
    <a target="_blank" title="Facebook" href="https://www.facebook.com/Reydelpino-1702395349837815/"><img class="a1" src="../../Imagenes/icon/fb.ico" onmouseover="hover(this);" onmouseout="unhover(this);"></a>
    <a title="Twitter" href="https://www.twitter.com" target="_blank"><img class="a2" src="../../Imagenes/icon/tw.ico" onmouseover="hover(this);" onmouseout="unhover(this);"></a>
    <a title="Instagram" href="https://www.instagram.com" target="_blank"><img class="a3" src="../../Imagenes/icon/in.ico" onmouseover="hover(this);" onmouseout="unhover(this);"></a>
    <a title="Snapchat" href="https://www.snapchat.com" target="_blank"><img class="a4" src="../../Imagenes/icon/sn.ico" onmouseover="hover(this);" onmouseout="unhover(this);"></a>    
    </div>
		
  </div>

</div>
</div>
    
   <script type="text/javascript">
    
    function hover(element) {
            var a=element.className;
            if(a=='a1'){element.setAttribute('src', '../../Imagenes/icon/fb2.ico');}
            if(a=='a2'){element.setAttribute('src', '../../Imagenes/icon/tw2.ico');}
            if(a=='a3'){element.setAttribute('src', '../../Imagenes/icon/in2.ico');}
            if(a=='a4'){element.setAttribute('src', '../../Imagenes/icon/sn2.ico');}
            } 
       
    

    function unhover(element) {
        var a=element.className;
        if(a=='a1'){element.setAttribute('src', '../../Imagenes/icon/fb.ico');}
        if(a=='a2'){element.setAttribute('src', '../../Imagenes/icon/tw.ico');}
        if(a=='a3'){element.setAttribute('src', '../../Imagenes/icon/in.ico');}
        if(a=='a4'){element.setAttribute('src', '../../Imagenes/icon/sn.ico');}
    }
    
    </script>
</footer>
	<script type="text/javascript" src="../../js/unzoom.js"></script>
	<script type="text/javascript" src="../../js/news.js"></script>
<div style="display:none">
</body>
</html>