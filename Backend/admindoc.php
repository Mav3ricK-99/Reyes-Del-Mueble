<?php session_start(); ?>
<!DOCTYPE html>
 <html lang="es">
     <head>
     <link rel="shortcut icon" href="../favicon.png" />
     <title>Tabla de Productos - Reyes del Mueble</title>
     <link rel="stylesheet" type="text/css" href="css/table.css">
     <link rel="stylesheet" type="text/css" href="style.css">
     <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, width=device-width">     
     </head>
     <body>
<?php
		 include_once('header.php');
		 ?><section class="sec"></section><?php
         $con=include_once('../includes/conexion.php');
         if(!$con||!isset($conexion))
         {echo "Hubo un problema al conectar con el servidor";die();}
         $consulta=$conexion->query("SELECT * FROM muebles");
         if(isset($_GET['m']))
         {
         ?><section class="sec"><?php
             include_once('table.php');
         ?></section>
         <?php include_once("editform.php");
         }
         else
         {
            include_once('table.php'); 
         }
         ?>
        <div style='display:none'>
     </body>