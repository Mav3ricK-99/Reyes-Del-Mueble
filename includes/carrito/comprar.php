<?php
session_start();
if(!isset($_SESSION['user']))
	{
		header("Location: ../loginform.php");
		session_destroy();
	}
if(isset($_GET['cproducto']))
{
	$prod=$_GET['cproducto'];
	require('../conexion.php');
	$userid=$_SESSION['id_user'];
	$sql="SELECT * FROM muebles WHERE id_mueble='$prod'";
	$consulta=$conexion->query($sql);
	$row=$consulta->fetch_array();
	$_SESSION['lista2']=null;
	$_SESSION['lista2']=$row['nombre'];
	$precio=$row['precio'];
	$fecha=date('d-m-Y');
	$sqlin="INSERT INTO ventas (id_usuario, fecha, total) VALUES ('$userid', '$fecha', '$precio')";
	$insertventa=$conexion->query($sqlin);
	$selectultimo="SELECT id_venta FROM ventas ORDER BY id_venta DESC LIMIT 1";
	$select=$conexion->query($selectultimo);
	$dato=$select->fetch_array();
	$sqlpxv="INSERT INTO prodxventas (id_venta, id_prod, cantidad, preciounidad) VALUES(".$dato['id_venta'].", ".$prod.", 1, ".$precio." )";
	$insertpxv=$conexion->query($sqlpxv);
	$updc="UPDATE muebles SET pago = pago + 1 WHERE id_mueble = ".$prod."";
	$updcr=$conexion->query($updc);
	$select->free();
	if($insertventa&&$select&&$insertpxv)
	{
			$mascompra="UPDATE usuarios SET compras = compras + 1 WHERE id_usuario='$userid'";
			$masunacompra=$conexion->query($mascompra);
			
	}
	$conexion->close();
}
if(isset($_SESSION['carrito']))
	{
		require('../conexion.php');
		$carrito=$_SESSION['carrito'];
		$userid=$_SESSION['id_user'];
		$fecha=date('d-m-Y');
		$cantidad=null;
		$precio=null;
		$total=0;$i=0;
		$_SESSION['lista']= array();
		foreach ($carrito as $producto) 
		{
			if($producto['Cantidad']<1){echo "Debe llevar almenos un producto de los que eligio";}
			$total=$total +($producto['Cantidad']*$producto['Precio']);
			$_SESSION['lista'][$i]=$producto['Nombre'];$i++;
		}
		$sql="INSERT INTO ventas (id_usuario, fecha, total) VALUES ('$userid', '$fecha', '$total')";
		$insertventa=$conexion->query($sql);
		$selectultimo="SELECT id_venta FROM ventas ORDER BY id_venta DESC LIMIT 1";
		$select=$conexion->query($selectultimo);
		$dato=$select->fetch_array();
		foreach ($carrito as $items => $producto)
		{
		$sqlpxv="INSERT INTO prodxventas (id_venta, id_prod, cantidad, preciounidad) VALUES(".$dato['id_venta'].", ".$producto['Id'].", ".$producto['Cantidad'].", ".$producto['Precio']." )";
		$insertpxv=$conexion->query($sqlpxv);
		$updc="UPDATE muebles SET pago = pago + 1 * ".$producto['Cantidad']." WHERE id_mueble = ".$producto['Id']."";
		$updcr=$conexion->query($updc);
		}
		$select->free();
		if($insertventa&&$select&&$insertpxv)
		{
			$mascompra="UPDATE usuarios SET compras = compras + 1 WHERE id_usuario='$userid'";
			$masunacompra=$conexion->query($mascompra);
			
		}
		$conexion->close();
	}
	$_SESSION['carrito']=null;
	setcookie('carrito', null, -1, '/');
	header("Location: ../../index.php");
?>