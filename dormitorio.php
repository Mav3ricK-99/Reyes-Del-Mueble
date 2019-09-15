<?php session_start(); ?>
<!DOCTYPE html>
 <html lang="es">
<head>  
    <link rel="shortcut icon" href="favicon.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/sub-basic.css">
    <link rel="stylesheet" type="text/css" href="css/vis-product.css">
    <link rel="stylesheet" type="text/css" href="css/component.css">
	<meta charset="UTF-8">
    <title>Dormitorio - Reyes del Mueble</title>
    
</head>
<body>      
    <?php include 'includes/header.php'; ?>
    <section id="section1">
        <div class="toph2"><h2>Dormitorio</h2></div>
        <div class="productosub">
       
        <div id="imagenes">
            <?php 
            $t1=6;$t2=7;$t3=6;
            include_once('includes/paginacion.php');
            ?>
        </div>
        </div> 
    </section> 
        
        <?php 
        if ($total_paginas > 1)
        {?> 
            <div class="pagination__wrapper">
            <ul class="pagination"><?php
            if($pagina!=1){$d=$pagina-1;echo "<li><a href='dormitorio.php?pagina=".$d."'><button class='prev' title='Pagina anterior'>&#10094;</button></a></li>";}
            else{echo "<li><button class='prev' title='Pagina anterior'>&#10094;</button></li>";}
            for ($i=1;$i<=$total_paginas;$i++)
            {
                if ($pagina == $i) {echo "<li><button class='active' title='Pagina actual - ".$pagina."'>".$pagina."</button></li>";}
                else
                {
                    echo "<li><a href='dormitorio.php?pagina=".$i."'><button title='Pagina  ".$i."'>".$i."</button></a></li>"; 
                }
            }
            if($pagina!=$total_paginas){$d=$pagina+1;echo "<li><a href='dormitorio.php?pagina=".$d."'> <button class='next title='Pagina siguiente'>&#10095;</button></a></li>";}
            else{echo "<li><button class='next title='Pagina siguiente'>&#10095;</button></li>";}
        }
        ?>
            </ul>
        </div>
    <?php include 'includes/footer.php'; ?>
	<script src="js/vistart.js"></script>
    
</body>
</html>