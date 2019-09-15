<?php
function agregarPrimerProducto($id){
	include("../conexion.php");
	$sql="SELECT * FROM muebles WHERE id_mueble='$id'";
	$consulta=$conexion->query($sql) or die($consulta->error());
	
	while($registro=$consulta->fetch_array()){
		$id_mueble = $registro['id_mueble'];
		$descripcion = $registro['descripcion'];
		$precio = $registro['precio'];
		$nombre = $registro['nombre'];
		$img = $registro['imagen'];
		$descuento = $registro['descuento'];
		$cantidad=1;
	}
	if($descuento>0)
	{
		$descuentof=$precio*$descuento/100;
		$precio=$precio-$descuentof;
	}
	$vector[]=array('Img'=>$img,'Nombre'=>$nombre,'Id'=>$id_mueble,'Descripcion'=>$descripcion, 'Precio'=>$precio,'Cantidad'=>$cantidad);

	//creamos la variable de session carrito
	$_SESSION['carrito']=$vector;
	setcookie('carrito',serialize($vector),time()+31536000,'/');
	$consulta->free();
	$conexion->close();
}

function mostrarCarrito(){
	$vector=$_SESSION['carrito'];
	$total=0;
    foreach ($vector as $producto) {
		echo "<div class='producto'>";
		echo "<div class='subp' id='".$producto['Id']."'>";
		echo '<br>';
		foreach ($producto as $indice => $valor) {
			if($indice=="Img")
			{
				echo '<img id="imagen" src="../../'.$valor.'">';
			}
			if($indice=="Nombre")
			{	
				echo '<span id="nombrec">'.$valor.'</span>';
			}
			if($indice=="Descripcion")
			{
				echo '<span id="desc">'.$valor.'</span>';
			}
			if($indice=="Precio")
			{	echo "<aside id='pyc'>";
				echo '$<span class="precc" id="precio'.$producto['Id'].'">'.$valor.'</span>';
			 	echo "</aside>";
			}
			if($indice=="Cantidad")
			{
				echo "<div id='cantidad'>";
				echo 'Cantidad <span id="suma'.$producto['Id'].'">'.$valor.'</span>';
				echo "</div>";
			}
			
		}
		if($producto['Cantidad']>1)
		{
		echo'<button class="menosb" id="menosb'.$producto['Id'].'" onClick="restar('.$producto['Id'].');"><i class="fas fa-minus-square"></i></button>';
		}
		else{
		echo'<button class="menosb" style="display:none" id="menosb'.$producto['Id'].'" onClick="restar('.$producto['Id'].');"><i class="fas fa-minus-square"></i></button>';
		}
		echo'<button id="suma" onClick="sumar('.$producto['Id'].');"><i class="fas fa-plus-square"></i></button>';
		$subtotal=$producto['Cantidad']*$producto['Precio'];
		echo '<div class="subtp">Sub-total: $<span id="subtotal'.$producto['Id'].'">'.$subtotal
			.'</span><br></div>';
		echo '<button id="eliminarp" onclick="eliminar('.$producto['Id'].');">Eliminar Producto</button>';
		echo '<br><br>';

		$total=$total +($producto['Cantidad']*$producto['Precio']);
		echo "</div>";
		echo "</div>";
		echo "<hr class='separador' id='separador".$producto['Id']."'>";
		}
	echo "<div class='ahoratodo'>";
	echo "<div class='todof'>";
	echo '<div id="atotal" style="float:left">Total: $</div><div id="total">'.$total.'</div>';
	echo '<div id="cvacio" style="display:none"><div id="cvacio2">El carrito esta vacio!</div></div>';
	echo "</div>";
	echo  '<a id="quitarcompra" href="comprar.php">Finalizar Compra</a>';
	echo '<button id="lcarrito" onclick="limpiarcarrito(this);">Vaciar carrito</button>';
	echo "</div>";
}

function buscarSiExiste($id){
	$existe=0; 
	$vector=$_SESSION['carrito'];
	foreach ($vector as $indice => $producto){
		if($producto['Id']==$id){
			$existe=1;
			$vector[$indice]['Cantidad']++;
		}
	}
	$_SESSION['carrito']=$vector;
	setcookie('carrito',serialize($vector),time()+31536000,'/');
	return $existe;
}

function agregarNuevoProducto($id){
	$vector=$_SESSION['carrito'];
	include("../conexion.php");
	$sql="SELECT * FROM muebles WHERE id_mueble='$id'";
	$consulta=$conexion->query($sql) or die($consulta->error());
	
	while($registro=$consulta->fetch_array()){
		$id_mueble = $registro['id_mueble'];
		$nombre = $registro['nombre'];
		$img = $registro['imagen'];
		$descripcion = $registro['descripcion'];
		$precio = $registro['precio'];
		$cantidad=1;
		$descuento = $registro['descuento'];
	}
	if($descuento>0)
	{
		$descuentof=$precio*$descuento/100;
		$precio=($precio-$descuentof);
	}
	$vectorNuevo=array('Img'=>$img,'Nombre'=>$nombre,'Id'=>$id_mueble,'Descripcion'=>$descripcion, 'Precio'=>$precio,'Cantidad'=>$cantidad);

	array_push($vector, $vectorNuevo);
	//creamos la variable de session carrito
	$_SESSION['carrito']=$vector;
	setcookie('carrito',serialize($vector),time()+31536000,'/');
	$consulta->free();
	$conexion->close();
}

function sumarCantidad($id){
	$vector=$_SESSION['carrito'];
	foreach ($vector as $indice => $producto){
		if($producto['Id']==$id){
			$vector[$indice]['Cantidad']++;
		}
	}

	$_SESSION['carrito']=$vector;
	setcookie('carrito',serialize($vector),time()+31536000,'/');
}

function restarCantidad($id){
	$vector=$_SESSION['carrito'];
	foreach ($vector as $indice => $producto){
		if($producto['Id']==$id){
			$vector[$indice]['Cantidad']--;
		}
	}

	$_SESSION['carrito']=$vector;
	setcookie('carrito',serialize($vector),time()+31536000,'/');
}

function borrarProducto($id){
	$vector=$_SESSION['carrito'];
	foreach ($vector as $indice => $producto){
		if($producto['Id']==$id){
			unset($vector[$indice]);
		}
	}
	if(count($vector)>0){
	$_SESSION['carrito']=$vector;
	setcookie('carrito',serialize($vector),time()+31536000,'/');
	}else{
		unset($_SESSION['carrito']);
		setcookie('carrito', null, -1, '/');
	}
}
function limpiarc(){
	$vector=null;
	unset($_SESSION['carrito']);
	setcookie('carrito', null, -1, '/');
}

function comprarprimerp($id,$can){
	include("../conexion.php");
	$sql="SELECT * FROM muebles WHERE id_mueble='$id'";
	$consulta=$conexion->query($sql) or die($consulta->error());
	while($registro=$consulta->fetch_array()){
		$id_mueble = $registro['id_mueble'];
		$descripcion = $registro['descripcion'];
		$precio = $registro['precio'];
		$nombre = $registro['nombre'];
		$img = $registro['imagen'];
		$descuento = $registro['descuento'];
	}
	if($descuento>0)
	{
		$descuentof=$precio*$descuento/100;
		$precio=$precio-$descuentof;
	}
	$vector[]=array('Img'=>$img,'Nombre'=>$nombre,'Id'=>$id_mueble,'Descripcion'=>$descripcion, 'Precio'=>$precio,'Cantidad'=>$can);
	$_SESSION['carrito']=$vector;
	setcookie('carrito',serialize($vector),time()+31536000,'/');
	$consulta->free();
	$conexion->close();
}



?>