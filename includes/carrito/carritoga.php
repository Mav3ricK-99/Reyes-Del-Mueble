<?php 
session_start();
if(!isset($_SESSION['user']))
	{
	if(isset($_COOKIE['sessionid'])&&isset($_COOKIE['user_n']))
	{
		require('../conexion.php');
		$user=$_COOKIE['user_n'];
		$ssid=$_COOKIE['sessionid'];
		$sql="SELECT * FROM usuarios WHERE usuario='$user' AND sessionid='$ssid'";
		$resp=$conexion->query($sql);
		while($row=$resp->fetch_array())
		{//No hay SESSION. Hay cookies, iguales que en la DB, se logea.
			$_SESSION['user']=$row['usuario'];
			$_SESSION['mail']=$row['mail'];
			$_SESSION['news']=$row['news'];
		}
		if(isset($_SESSION['user'])&&isset($_COOKIE['carrito']))
		{$_SESSION['carrito']= unserialize($_COOKIE['carrito']);}
	}
	else{header("Location: ../loginform.php");session_destroy();}
	}
	include("includes/libreria-ga.php");
	?> 
	
	<!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <title>Carrito de compras - Rey del Mueble</title>
	 <link rel="shortcut icon" href="../../favicon.png" />
	 <script type="text/javascript" src="../../js/jquery-3.3.1.min.js"></script>
	 <link rel="stylesheet" type="text/css" href="../../css/component.css">
	 <script src="../../js/vistart.js"></script>
 </head>
 <body>
 <?php include('includes/headerc.php');?>
	<section id="section1">
 <h2 id="carritob">Carrito de compras</h2>
	 <button onclick="refresh(this);" style="display:none">icon</button>
 <?php
		echo "<article id='carrito'>";
if(!isset($_SESSION['carrito']))
{
	if(!isset($_GET['id_mueble'])){
	echo '<div id="cvacio2">El carrito esta vacio!</div>';
	echo  '<div id="vermas"><a href="../../productos.php">Ver todos los productos.</a></div>';
	echo "<div id='imagenes'>";
	require('../conexion.php');
	$query="SELECT * FROM muebles ORDER BY RAND() ASC LIMIT 4";
	$resultado=$conexion->query($query);
	$GLOBALS['p']=0;
	while($datos=$resultado->fetch_assoc())
	{
		$p=$p+1;
		include 'includes/mostrarc.php';
	}
	$conexion->close();
	echo "</div>";
	}else{
		//Se agrega el primer producto
		if(isset($_GET['id_mueble'])&&isset($_GET['cantidad']))
		{
			comprarprimerp($_GET['id_mueble'],$_GET['cantidad']);
		}
		else
		{
		agregarPrimerProducto($_GET['id_mueble']);	
		mostrarCarrito();
		echo  '<a href="comprar.php">Finalizar Compra</a>';
 		echo  '<br>';
 		}
		}
		}else	
		{
		if(!isset($_GET['id_mueble'])){
			mostrarCarrito();
		}else{
			$existe=buscarSiExiste($_GET['id_mueble']);
			if($existe==0)
			{
			agregarNuevoProducto($_GET['id_mueble']);
			}
			mostrarCarrito();
		}	
		if(isset($_GET['c_limpiar']))
		{limpiarc();}
		if(isset($_GET['id_suma']))
		{sumarCantidad($_GET['id_suma']);}
		if(isset($_GET['id_resta']))
		{restarCantidad($_GET['id_resta']);}
		if(isset($_GET['id_borra']))
		{borrarProducto($_GET['id_borra']);}
	 	}
		if(isset($_GET['id_mueble'])||isset($_SESSION['carrito']))
		{
		echo  '<div id="vermas"><a href="../../productos.php">Ver todos los productos.</a></div>';
		}
		echo "</article>";
	?>
		</section>
	 <?php include_once('includes/footerc.php'); ?>
	<script src="../../js/carrito.js"></script>
	 <script type="text/javascript" src="../../js/unzoom.js"></script>
	<script type="text/javascript" src="../../js/news.js"></script>
 </body>
 </html>