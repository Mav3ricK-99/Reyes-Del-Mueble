<?php
$query="SELECT m.nombre,m.precio,m.imagen,m.tipos,t.tipo FROM muebles m JOIN tipo t ON m.tipos=t.id_tipo ORDER BY tipos";
?>