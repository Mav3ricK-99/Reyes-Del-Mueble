<?php session_start();
if(!isset($_POST['camb']))
{die();}
if(isset($_SESSION['user']))
{
	
	require_once('../conexion.php');
	$user=$_SESSION['user'];
	$actual=$_POST['pa'];
	$sqlverif="SELECT contrasenia FROM usuarios WHERE usuario='$user' AND contrasenia='$actual' ";
	$respuesta=$conexion->query($sqlverif);
	if($respuesta->fetch_row()>0)
	{
		if($_POST['pn1']==$_POST['pn2'])
		{
		$pnueva1=$_POST['pn1'];
		if(strlen($pnueva1)<7){echo 0;die();}
		$sqlcamb="UPDATE usuarios SET contrasenia='$pnueva1' WHERE usuario='$user' AND contrasenia='$actual' ";
		$cambiop=$conexion->query($sqlcamb);
		if($cambiop)
		{
			echo  1;
			session_destroy();
		}
		}
		else{echo 2;}
	}
	else
	{
		echo 3;
	}
}
	

?>