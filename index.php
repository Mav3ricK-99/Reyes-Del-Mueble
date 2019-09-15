<?php session_start(); ?>
<html lang="es">
<head>
    <title>Inicio - Reyes del mueble</title>
    <link rel="shortcut icon" href="favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/component.css">
	<script src="js/vistart.js"></script>
	<meta charset="UTF-8">

</head> 
<body>  
		<?php include_once 'includes/header.php';?>
		<?php include_once 'includes/slider.php';?>
		<section id="section1">  
			<?php
		if(isset($_GET['ahora']))
		{
		?>
		<div class="ahora">
		Felicidades! <?php echo $_GET['ahora']; ?> por formar parte de las mejores ofertas y descuentos, Bienvenido a PinoNews!.<br>
		-Recibiras email's con descuentos, promos, novedades y los ultimos cambios del sitio.
		</div>
		<?php
		}
		
		if(isset($_GET['regx']))
		{
		?>
		<div class="ahora">
		Felicidades! <?php echo $_GET['regx']; ?> Ahora formas parte de la gran comunidad del Reyes del Mueble &copy;. Eres libre de realizar tus primeras compras y de modificar el perfil a tu gusto. <br>¿Quieres conocer mas acerca de novedades y descuentos? Puedes ir al pie de pagina para registrarte a las <a href="#F">PinoNews!</a>.<br>
		</div>
		<?php
		}
		?>
               <div class="toph2">
               <h2 id="top">Lo mas Vendido</h2>
			   <h2 id="of">Ofertas</h2>
               </div>
          		
				<article>
				<div id="imagenes">
                <?php
                $query="SELECT * FROM muebles WHERE descuento < 1 ORDER BY `pago` DESC LIMIT 6";
                $resultado=$conexion->query($query);
				$GLOBALS['p']=0;
                while($datos=$resultado->fetch_assoc())
                {	$p=$p+1;
                    include 'includes/mostrar.php';
                }
				unset($GLOBALS['p']);
				$resultado->free();	
                ?>
				</div>
				<div class="toph2">
               <h2 id="of2">Ofertas</h2>
               </div>
               <div class="ofertas">
               <?php include 'includes/ofertas.php';?>
				   
				   
			   </div>
			</article>
			<div class="toph2">
               <h2 id="agregados">Productos agregados recientemente</h2>
			 </div>
			<article>
				<div id="imagenes">
              		<?php
				$sql="SELECT * FROM muebles WHERE descuento < 1 LIMIT 9";
				$consulta=$conexion->query($sql);
				$GLOBALS['p']=6;
				while($datos=$consulta->fetch_assoc())
                {
                $p=$p+1;
                include 'includes/mostrar.php';
                }
				unset($GLOBALS['p']);
				$consulta->free();	
				?>
				</div>
			   <div class="toph2">
               <h2 id="of2">Ofertas</h2>
               </div>
               <div class="ofertas">
              <?php include 'includes/ofertas.php';?>
			   </div>
			</article>
			 
        </section> <div id="F"></div>
		<?php include 'includes/footer.php';?>
        <script type="text/javascript" src="js/slider.js"></script>
		
</body>
</html>
