    <!DOCTYPE html>
 <html lang="es">
<head>  
<link rel="shortcut icon" href="favicon.png" />
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/sub-basic.css">
    <link rel="stylesheet" type="text/css" href="css/vis-product.css">
    <meta charset="UTF-8">
    <title>Comedor</title>
</head>
<body>      
                        <section id="section1">
                        <table border="solid">
    							<tr>
    								<td>Id</td>
    								<td>Nombre</td>
    								<td>Apellido</td>
    								<td>Email</td>
    								<td>Telefono</td>
    								<td>Ciudad</td>
    								<td>Asunto</td>
                                    <td>Mensaje</td>
    							</tr>
    							<?php
    							require("../includes/conexion.php");
                        	    $query="SELECT c.id,c.nombre,c.apellido,c.email,c.telefono,c.ciudad,c.mensaje,m.m FROM contacto c 
                        	    JOIN mensaje m ON c.asunto=m.id_mensaje";
    							$resu=$conexion->query($query);
                        		while($registro=$resu->fetch_assoc())
                        		{
                        			echo"<tr>";
                        			echo "<td class='text-center'><b>".$registro['id']."</b></td>";
                        			echo "<td class='text-center'><b>".$registro['nombre']."</b></td>";
                        			echo "<td class='text-center'><b>".$registro['apellido']."</b></td>";
                        			echo "<td class='text-center'><b>".$registro['email']."</b></td>";
                        			echo "<td class='text-center'><b>".$registro['telefono']."</b></td>";
                        			echo "<td class='text-center'><b>".$registro['ciudad']."</b></td>";
                        			echo "<td class='text-center'><b>".$registro['m']."</b></td>";
                        			echo "<td class='text-center'><b>".$registro['mensaje']."</b></td>";
                        			echo"</tr>";
                        		}	
                        	?>
                        </table>	
                        </section>
</body>
</html>