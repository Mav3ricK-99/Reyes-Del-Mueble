<div class="productog">
<div class="name">
<?php echo '<td><img src="'.$row['imagen'].'" id="img"></td>';?>
<ul>
         <li id='desc' style="width:20em;"><h2>Descripcion</h2><?php echo $row['descripcion'] . 
			"<br>".$row['medida']. "<br>".$row['color'] ?></li>
       </ul>
</div>
<div id="prod">
       
       
       <?php echo "<div id='nam'>".$row['nombre']."</div>"; ?>
       <h1 class="item-title__primary "><?php echo $row3['tipo'];?></h1>
       <div id="boton">
       <?php
            if($row['descuento']>0)
            {
            	echo "<h1 class='preciosin'><span id='sin'>$".$row['precio']."</span>";
 				$descuento=$row['precio']*$row['descuento']/100;
				echo " - ";
				echo "$".($row['precio']-$descuento)."</h1>";
				echo "<div id='descuentode'>Descuento del ".$row['descuento']."% !</div>";
            }
            else
            {
			?>     
       		<h1 class="precio">$<?php echo $row['precio'];?></h1>
       		<?php
       		}
     ?>
       <div class="tarjetas">
       <img class="sub_tarjeta" src="Imagenes/tarjeta.png"><span>Paga en hasta 12 cuotas</span>
       </div>
       <div class="tarjeta">
       <img  src="Imagenes/visa.png">
       <img src="Imagenes/mastercard.jpg">
       <img src="Imagenes/american.png">
       </div>
        <div class='acordar'>
         <img src="Imagenes/perfil.png"><span id="entrega">Entrega a acordar con el vendedor</span><br>
         <strong>Avellaneda, Buenos Aires</strong><br>
         <a href="mailto:reyesdelpino5@gmail.com">Consultar costos</a>
        <br><br>
        </div>
      <div id="canti">Cantidad</div>
		<div class="cantidades">
		<?php
       	echo'<button class="menosb" id="menosb" onClick="menosp('.$cant.','.$row['id_mueble'].');"><i class="fas fa-minus-square"></i></button>';
	 	?>
	   <div id="c">1</div>
      <button id="suma" onClick="sumarp(<?php echo $cant.",".$row['id_mueble']; ?>);"><i class="fas fa-plus-square"></i></button>
     
		</div>
		   <?php
		   if(!isset($_SESSION['user']))
		   {
			   echo "<input type='button' name='boton' value='Comprar ahora' onclick='nolog(this);'>";
			   echo "<div id='nosess'></div>";
			  
		   }
		   else
		   {
			echo "<input id='comprab' type='button' name='boton' value='Comprar ahora' onclick='comprarp(this,".$row['id_mueble'].");'>";
			echo "<a class='carritoa' onclick='agregarp(this,".$row['id_mueble'].",".$cant.");'><i class='fas fa-cart-plus'></i></a>";
		   }
		   ?>
		   
		</div>
	
   </div>  
</div>
<script type="text/javascript" src="js/carrito.js"></script>

