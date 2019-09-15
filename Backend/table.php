<article class="tableform">
                <form method="get" action="admindoc.php">
                    <select name="catego">
                        <option value="Todos">Elige una opcion</option>
                        <option value="1">Comedor</option>
                        <option value="10">Living</option>
                        <option value="6">Dormitorio</option>
                        <option value="8">Oficina</option>
                        <option value="4">Decoracion</option>
                        <option value="Todos">Todos</option>
                    </select>
                    <input type="submit" name="enviarcat" value="Listar">
                </form>

                <form method="get" action="admindoc.php" class="buscform">
                    <input type="text" name="busq">
                    <input type="submit" name="enviarbusq" value="Buscar">
                </form> 
</article>
<?php
$Tamano_pagina = 12;
$total_paginas=0;

if(!isset($_GET['pagina'])) 
    {
    $pagina=1;
    $inicio=0;
    }
    else 
    { 
		$pagina=$_GET['pagina'];
        $inicio=($pagina-1)*$Tamano_pagina;
    }
    $num_total_registros = $consulta->num_rows;
    $sql2="SELECT * FROM muebles " . " LIMIT " . $inicio . "," . $Tamano_pagina;
    $consulta=$conexion->query($sql2);
    $total_paginas = ceil($num_total_registros / $Tamano_pagina); 
/////////////////////////////////////////////////////////////////////////////////////////////
if(isset($_GET['enviarbusq'])){include_once('buscar.php');}
if(isset($_GET['f'])||isset($_GET['catego'])){include_once('filter.php');}

if($consulta->num_rows==0){echo "<div class='noreg'>No hay registros que mostrar.</div>";die();}
 if(isset($_GET['catego']))
{
?><div class="table-title">
<h3>Productos Muebles - Rey del Mueble</h3>
</div><?php
echo "<table class='table-fill'";
echo "<thead>";
echo "<tr>";
echo "<th class='text-center'><a href='admindoc.php?f=id_mueble&&catego=".$catego."'>ID_Mueble</a></th>";
echo "<th class='text-center'><a href='admindoc.php?f=nombre&&catego=".$catego."'>Nombre</a></th>";    
echo "<th class='text-center'><a href='admindoc.php?f=precio&&catego=".$catego."'>Precio</a></th>";
echo "<th class='text-center'><a href='admindoc.php?f=descripcion&&catego=".$catego."'>Descripcion</a></th>";
echo "<th class='text-center'><a href='admindoc.php?f=tipos&&catego=".$catego."'>Categoria</a></th>";
echo "<th class='text-center'><a href='admindoc.php?f=color&&catego=".$catego."'>Color</a></th>";
echo "<th class='text-center'><a href='admindoc.php?f=pago&&catego=".$catego."'>Pagos</a></th>";
echo "<th class='text-center'><a href='admindoc.php?f=medida&&catego=".$catego."'>Dimenciones</a></th>";
echo "<th class='text-center'><a href='admindoc.php?f=fecha&&catego=".$catego."'>Fecha Ingreso</a></th>";    
echo "<th class='text-center'>Imagen</th>";
echo "<th class='text-center'>Modificar</th>";
echo "<th class='text-center'>Eliminar</th>";
echo "</tr>";
echo "</thead>";     
}
else   //////////////////////////////////////////////////////////////////////////////////////
{
?><div class="table-title">
<h3>Productos Muebles - Rey del Mueble</h3>
</div><?php
echo "<table class='table-fill'>";
echo "<thead>";
echo "<tr>";
echo "<th class='text-center'><a href='admindoc.php?f=id_mueble'>ID_Mueble</a></th>";
echo "<th class='text-center'><a href='admindoc.php?f=nombre'>Nombre</a></th>";    
echo "<th class='text-center'><a href='admindoc.php?f=precio'>Precio</a></th>";
echo "<th class='text-center'><a href='admindoc.php?f=descripcion'>Descripcion</a></th>";
echo "<th class='text-center'><a href='admindoc.php?f=tipos'>Categoria</a></th>";
echo "<th class='text-center'><a href='admindoc.php?f=color'>Color</a></th>";
echo "<th class='text-center'><a href='admindoc.php?f=pago'>Pagos</a></th>";
echo "<th class='text-center'><a href='admindoc.php?f=medida'>Medidas</a></th>";
echo "<th class='text-center'><a href='admindoc.php?f=fecha'>Fecha Ingreso</a></th>";
echo "<th class='text-center'>Imagen</th>";
echo "<th class='text-center'>Modificar</th>";
echo "<th class='text-center'>Eliminar</th>";
echo "</tr>";
echo "</thead>";
}
if(isset($_GET['m'])){
	$m=$_GET['m'];
	$ms="SELECT * FROM muebles WHERE id_mueble=$m";
	$mss=$conexion->query($ms);
	while($mssf=$mss->fetch_array())
	{	
	$nombref=$mssf['nombre'];
    $preciof=$mssf['precio'];
    $colorf=$mssf['color'];
    $tipof=$mssf['tipos'];
	$descripcionf=$mssf['descripcion'];
	}
}
while($registro=$consulta->fetch_assoc())
            { 
			
               $nuevo=date("d/m/Y",strtotime($registro['fecha']));
               echo "<tbody class='table-hover'>";
               echo "<tr>";
               echo "<td class='text-center'><b>".$registro['id_mueble']."</b></td>";
               echo "<td class='text-center'>".$registro['nombre']."</td>";    
               echo "<td class='text-center'>$".$registro['precio']."</td>";
               echo "<td class='text-center'>".$registro['descripcion']."</td>";
               echo "<td class='text-center'>";
               $tipo=$registro['tipos'];
               $query3="SELECT t.tipo FROM muebles m JOIN tipo t ON $tipo=t.id_tipo";
               $resultado3=$conexion->query($query3);
               $row3=$resultado3->fetch_assoc();
               echo $row3['tipo'];
               echo "<td class='text-center'>".$registro['color']."</td>";
				echo "<td class='text-center'>".$registro['pago']."</td>";
               echo "<td class='text-center'>".$registro['medida']."</td>";
               echo "<td class='text-center'>".$nuevo."</td>";
			   if (!file_exists("../".$registro['imagen']))
			   {echo '<td><img src="../Imagenes/Productos/aa.jpg" id="img"></td>';}else
			   {
               echo '<td><img src="../'.$registro['imagen'].'" id="img"></td>';
			   }
               echo "<td id='bott' class='text-center'><a href='admindoc.php?m=".$registro['id_mueble']."&&pagina=".$pagina."'>Modificar</a></td>";
     			?>
				<td id='bott' class='text-center'><a href='<?php echo "del.php?e=".$registro['id_mueble']."&n=".$registro['nombre']; ?>' onclick='confirm("Esta seguro de eliminar el producto: <?php echo $registro['nombre'];?>")' >Eliminar</a></td><?php
               echo "</tr>";
			}
               
              
echo "</tbody>";
echo "</table>";
if(isset($_GET['busq'])&&isset($_GET['enviarbusq']))
{die();}
echo "<div class='center'>";
echo "<div class='paginacion'>";
if(!isset($_GET['f'])&&!isset($_GET['catego']))
   {
        if ($total_paginas > 1)
        { 
        if($pagina!=1){$d=$pagina-1;echo "<a href='admindoc.php?pagina=".$d."'> << </a>";}   
   	    for ($i=1;$i<=$total_paginas;$i++)
            { 
      	    if ($pagina == $i) {echo "<a>".$pagina."</a>";}
            else{ echo "<a href='admindoc.php?pagina=".$i."'>".$i."</a> "; }
            }
        if($pagina!=$total_paginas){$d=$pagina+1;echo "<a href='admindoc.php?pagina=".$d."'> >> </a>";} 
        }
   }
if(isset($_GET['f'])&&!isset($_GET['catego']))
    {
    
    if ($total_paginas > 1)
        { 
        if($pagina!=1){$d=$pagina-1;echo "<a href='admindoc.php?f=".$filtro."&&pagina=".$d."'> << </a>";}
   	        for ($i=1;$i<=$total_paginas;$i++)
                { 
                if ($pagina == $i) {echo "<a>".$pagina."</a>";}
                else{ echo "<a href='admindoc.php?f=".$filtro."&&pagina=".$i."'>".$i."</a> "; }
         	    }
        if($pagina!=$total_paginas){$d=$pagina+1;echo "<a href='admindoc.php?f=".$filtro."&&pagina=".$d."'> >> </a>";}
   	    }
    }
if(isset($_GET['catego'])&&!isset($_GET['f']))
    {
    if($pagina!=1){$d=$pagina-1;echo "<a href='admindoc.php?catego=".$catego."&&pagina=".$d."'> << </a>";}
    if ($total_paginas > 1)
        { 
   	        for ($i=1;$i<=$total_paginas;$i++)
                {
                if ($pagina == $i) {echo "<a>".$pagina."</a>";}
                else{ echo "<a href='admindoc.php?catego=".$catego."&&pagina=".$i."'>".$i."</a> "; }
         	    }
        if($pagina!=$total_paginas){$d=$pagina+1;echo "<a href='admindoc.php?catego=".$catego."&&pagina=".$d."'> >> </a>";}
   	    }
    }
if(isset($_GET['catego'])&&isset($_GET['f']))
    {
    if($pagina!=1){$d=$pagina-1;echo "<a href='admindoc.php?catego=".$catego."&&pagina=".$d."&&f=".$filtro."'> << </a> ";}
    if ($total_paginas > 1)
        { 
   	        for ($i=1;$i<=$total_paginas;$i++)
                {
                if ($pagina == $i) {echo "<a>".$pagina."</a>";}
                else{ echo "<a href='admindoc.php?catego=".$catego."&&pagina=".$i."&&f=".$filtro."'>".$i."</a> "; }
         	    }
        if($pagina!=$total_paginas){$d=$pagina+1;echo "<a href='admindoc.php?catego=".$catego."&&pagina=".$d."&&f=".$filtro."'> >> </a> ";}
   	    }
    }
echo "</div>";
echo "</div>"; 
?>