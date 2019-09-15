<?php

function Listardatos($id_user,$conexion)
{
	$sql="SELECT * FROM usuarios WHERE id_usuario='$id_user'";
	$selectp=$conexion->query($sql);
	$perf=$selectp->fetch_array();
	
	echo"<div class='caja1' style='box-shadow:none'>";
	echo "<h4 style='border-top:none'>Nombre y Apellido</h4><div id='nombrep'>".$perf['nombre_apellido']."</div>";
	echo "<h4>Nombre de usuario</h4><div id='nombrep'>".$perf['usuario']."</div>";
	echo "<h4>Fecha de nacimiento</h4><div id='nombrep' class='fecha'>".$perf['fecha_nac'];
	if($perf['fecha_nac']==''){echo "Ups, parece que aqui no se llenaron datos.";}
	echo "</div></div>";
	echo "</div>";
    
	echo "<div class='caja2' style='box-shadow:none'><h4 style='border-top:none;'>Correo electronico</h4><div id='nombrep'>".$perf['mail']."</div>";
	echo "<h4>Total de compras en el sitio</h4><div id='nombrep'>".$perf['compras']."</div>";
	echo "<h4>Cambiar contraseña</h4><div id='nombrepp'>";
	?>
	<form id="cambiarp" method="post">
		<input type="password" id="pa" name="pactual" placeholder="Ingrese su contraseña actual">
		<input type="password" id="pn1" name="pnueva1" placeholder="Ingrese una nueva contraseña">
		<input type="password" id="pn2" name="pnueva2" placeholder="Repita su nueva contraseña">
		<input type="submit" id="camb" value="Cambiar contraseña" name="cambiar">
	</form>
	<div class="p"></div>
	</div>
	<?php
	$selectp->free();
}



?>