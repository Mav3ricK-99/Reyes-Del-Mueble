<?php   
    $busq=$_GET['busq'];
    $busqd=$_GET['busq'];
    $timestamp = strtotime(str_replace('/', '-', $busqd));
    $busqd = date('Ymd',$timestamp);
    
    $sql="SELECT * FROM muebles WHERE nombre LIKE '%$busq%' OR descripcion LIKE '%$busq%' OR precio LIKE '%$busq%' OR color LIKE '%$busq%' OR fecha LIKE '%$busqd%'";
    $consulta=$conexion->query($sql);

?>
