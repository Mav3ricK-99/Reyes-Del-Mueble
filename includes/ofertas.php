<?php
require("conexion.php");
$query="SELECT * FROM muebles WHERE descuento > 0 ORDER BY RAND() ASC LIMIT 0, 2";
$resultado=$conexion->query($query);
$GLOBALS['p']=0;
while($oferta=$resultado->fetch_assoc())
{	$GLOBALS['p']=$GLOBALS['p']+1;
	?>
	<div class="oferta <?php echo $p; ?>">
	<a class='aproduc' href="producto.php?id_mueble=<?php echo $oferta['id_mueble']?>&tipos=<?php echo $oferta['tipos']?>">
	<?php 
	if(!file_exists($oferta['imagen'])||$oferta['imagen']=='')
	{echo '<img src="Imagenes/Productos/aa.jpg" >';}
    else
	{
	   echo '<img src="'.$oferta['imagen'].'" >';      
	}
 		echo "<div id='subcatego'>";
 		switch($oferta['tipos'])
			 {
			case 1:case 2:case 3:{echo "Comedor -";break;}
			case 4:case 5:{echo "Decoracion - ";break;}
			case 6:case 7:{echo "Dormitorio - ";break;}
			case 8:case 9:{echo "Jugueteria - ";break;}
			case 10:case 11:{echo "Living - ";break;}
			}
		$query3="SELECT t.tipo FROM muebles m JOIN tipo t ON ".$oferta['tipos']."=t.id_tipo";
        $resultado3=$conexion->query($query3);
        $row3=$resultado3->fetch_assoc();
        echo $row3['tipo'];
 		echo "</div>";
 		?>
		<div id="nof">
        <?php echo "<h1>".$oferta['nombre']."</h1>"; ?>
  		</div>
		<div id="precios">
        <?php 
        echo "<div id='pre1'>$".$oferta['precio'];echo"</div>";
 		$descuento=$oferta['precio']*$oferta['descuento']/100;
		echo " <div id='pre2'>- $".($oferta['precio']-$descuento);echo "</div>";
		?>
		</div>
		</a>
		<?php
		if(isset($_SESSION['user']))
		{?>
		<div>
		<button class="carritoof <?php echo $oferta['id_mueble']; ?>" onclick="agregar(this,<?php echo $oferta['id_mueble'];?>);"><i class="fas fa-cart-plus"></i></button>
		</div>
		<script src="js/carrito.js"></script>
		<?php
		}
 		?>
		<div class="mostrarofe" onclick="descripcionof(this,<?php echo $p;?>);"><div class="d"></div><p id="md">Mostrar detalles</p></div>
		<div class="desccof <?php echo $p; ?>">
     	<?php echo $oferta['descripcion'];?>
 		</div>	
	</div>
	<?php
}
unset($GLOBALS['p']);
?>

