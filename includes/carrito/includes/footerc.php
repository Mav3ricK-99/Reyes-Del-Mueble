<link rel="stylesheet" type="text/css" href="../../css/footer.css">
<footer> 
 <div class="footer-container">
 <div class="footer-main"> 
  <div class="footer-columna">
    <h3>Pino News</h3>
	 <p id="conoce">Conoce todas las ofertas e Informate de las ultimas novedades</p>
   <form method="POST" id="newsform">
   <input type="text" id="nombre" placeholder="Escriba su nombre" required>  
   <input type="email" id="mail" placeholder="Ingrese su correo" required>
   <input type="submit" id="Enviar" value="Enviar">
   </form>
	  <div class="np"></div>
	  <div id="baja">Quieres darte de baja de PinoNews? Haz click <a href='javascript:void(0)' Onclick='switchbaja(this);'>aqui</a>.</div>
  </div>  
  <div class="footer-columna"> 
        <h3>Cuenta</h3>
        <ul>
        <span class=""><li><a href="contacto.php"><p>Quejas</p></a></li></span>
		<?php
		if(isset($_SESSION['user']))
		{?>
		<span class=""><li><a href="../../perfil.php"><p>Perfil</p></a></li></span>
		<span class=""><li><a href="#"><p>Cambiar Contraseña</p></a></li></span>
		<?php
		}
		else{
		?>
        <span class=""><li><a href="includes/loginform.php?r"><p>Crear cuenta</p></a></li></span>
		<span class=""><li><a href="includes/accounts/olvidopass.php"><p>¿Olvidaste tu contraseña?</p></a></li></span>
		<?php } ?>
        <span class=""><li><a href="locales.php"><p>Locales</p></a></li></span>
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

<div style="display:none">