	<div class="imagen <?php echo $p; ?>">
	<a class='aproduc' href="producto.php?id_mueble=<?php echo $datos['id_mueble']?>&tipos=<?php echo $datos['tipos']?>">
	<?php 
	if(!file_exists($datos['imagen'])||$datos['imagen']=='')
	{echo '<img src="Imagenes/Productos/aa.jpg" >';}
    else{
	   echo '<img src="'.$datos['imagen'].'" >';      
	}?> 
		
		<div id="n">
        <?php echo "<h1>".$datos['nombre']."</h1>"; ?>
  		</div>
		<?php
		if(isset($_SESSION['user']))
		{
        echo "<div class='pre'>";
        echo '$'.$datos['precio'];
		echo "</div>";
		}
		else
		{
		echo "<div class='preno'>";
        echo '$'.$datos['precio'];
		echo "</div>";
		}
		?>
		</a>
		<?php
		if(isset($_SESSION['user']))
		{?>
		<div>
		<button class="carrito <?php echo $datos['id_mueble']; ?>" onclick="agregar(this,<?php echo $datos['id_mueble'];?>);"><i class="fas fa-cart-plus"></i></button>
		</div>
		<script src="js/carrito.js"></script>
		<?php
		}
		?>
		<div class="mostrard" onclick="descripcion(this,<?php echo $p;?>);"><div class="d"></div><p id="md">Mostrar detalles</p></div>
		<div class="descc <?php echo $p; ?>">
     	<?php echo $datos['descripcion'];?>
 		</div>
	</div>
