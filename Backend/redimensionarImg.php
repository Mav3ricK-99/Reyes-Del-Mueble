<?php
    function redimensionarImg ($ficherotemp, $ancho_f, $alto_f)
	{
	list($ancho_i,$alto_i,$nro_tipo)=getimagesize($ficherotemp);
	switch ($nro_tipo) 
       {
		  case '1': $img_inicial = imagecreatefromgif($ficherotemp);break;
		  case '2': $img_inicial = imagecreatefromjpeg($ficherotemp);break;
		  case '3': $img_inicial = imagecreatefrompng($ficherotemp);break;
		  default:
               echo "<h2>Imagen Invalida</h2>".die();break;
	   }
        
    $foto=$_FILES['imagen']['name'];
    $ratio_ancho = $ancho_f/$ancho_i;
    $ratio_alto = $alto_f/$alto_i;
    $ratio_max = max($ratio_ancho, $ratio_alto);
    $nvo_ancho = $ancho_i * $ratio_max;
    $nvo_alto = $alto_i * $ratio_max;
    $cortar_ancho = $nvo_ancho - $ancho_f;
    $cortar_alto = $nvo_alto - $alto_f;
    $desplazamiento = 0.5;
    $nueva_img = imagecreatetruecolor($ancho_f, $alto_f);
    imagecopyresampled($nueva_img, $img_inicial, -$cortar_ancho * $desplazamiento, -$cortar_alto *  $desplazamiento, 0, 0, $ancho_f + $cortar_ancho, $alto_f + $cortar_alto, $ancho_i, $alto_i);
    imagedestroy($img_inicial);
    $calidad = 80;
    $ruta_nbre ="Imagenes/Productos/".time()."-".$foto;
    imagejpeg($nueva_img,"../".$ruta_nbre,$calidad);
    return $ruta_nbre;
    }
    
    
        
?>