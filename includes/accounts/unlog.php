<?php
session_start();
setcookie('user_n',null,time()-1,'/');
setcookie('sessionid',null,time()-1,'/');
setcookie('mail',null,time()-1,'/');
setcookie('news',null,time()-1,'/');
setcookie('id_user',null,time()-1,'/');
setcookie('carrito', null, -1, '/');
require_once('../conexion.php');
$updatedate="UPDATE usuarios SET fecha_sesion=CURDATE()";
$updd=$conexion->query($updatedate);
$conexion->close();
session_destroy();
header("Location: ../loginform.php");
?>