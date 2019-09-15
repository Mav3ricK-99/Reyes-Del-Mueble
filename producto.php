<?php session_start();
if(!isset($_GET['id_mueble']))
        {
            header("Location: https://reyesdelmueble1.000webhostapp.com/index.php");
        }
?>
<!DOCTYPE html>
 <html lang="es">
<head>  
<link rel="shortcut icon" href="favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/producto.css">
	<link rel="stylesheet" type="text/css" href="css/component.css">
    
<meta charset="UTF-8">

</head>  
<body>      
      <?php
        include 'includes/header.php';
        include 'includes/conexion.php';
        include 'includes/id.php';
        if(!isset($_GET['cantidad'])&&!isset($cant))
		{
			$cant=1;
		}
		?>
    <section id="section1">  
    <div class="topventa"><hr>
    <h1>Productos - <?php 
       $tipo=$row['tipos'];
       switch($tipo)
		{
		case 1:case 2:case 3:{echo "Comedor -";break;}
		case 4:case 5:{echo "Decoracion - ";break;}
		case 6:case 7:{echo "Dormitorio - ";break;}
		case 8:case 9:{echo "Jugueteria - ";break;}
		case 10:case 11:{echo "Living - ";break;}
		}
	   $query3="SELECT t.tipo FROM muebles m JOIN tipo t ON $tipo=t.id_tipo";
       $resultado3=$conexion->query($query3);
       $row3=$resultado3->fetch_assoc();
       echo $row3['tipo'];
       $queryn="SELECT nombre FROM muebles WHERE $prod=id_mueble";
       $resultadon=$conexion->query($queryn);
       $rown=$resultadon->fetch_assoc();
       echo "<title>".$rown['nombre']." - Reyes del Mueble</title>";
       $resultado3->free(); 
       $resultadon->free();
       ?></h1>
    </div>
        <div id="producto">
        <?php include 'includes/mostrar3.php';?>
        </div>

        <h1 id='tamb'>Tambien te pueden interesar</h1>
            
        <div id="imagenesbot">
               <?php 
			   $query2="SELECT * FROM muebles WHERE tipos='$tipo' AND id_mueble!='$prod' ORDER BY RAND() LIMIT 0,4";
               $resultado2=$conexion->query($query2);
			   $GLOBALS['p']=0;
               while($datos=$resultado2->fetch_assoc())
               {
                 $p=$p+1;
                 include 'includes/mostrar.php';
               } 
			   unset($GLOBALS['p']);
			   $resultado2->free();
               ?>
         </div> 
    </section>
        <?php include 'includes/footer.php';?>
		<script src="js/vistart.js"></script>
</body>
</html>