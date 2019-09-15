<?php
	session_start();
	require('../conexion.php');
	$pass=$_POST['password'];
	$user=$_POST['username'];
	$autov=$_POST['autov'];
	$sql="SELECT * FROM usuarios WHERE usuario='$user' AND contrasenia='$pass'";
	$resp=$conexion->query($sql);
	if($resp->num_rows>0)
	{	
		$dato=$resp->fetch_array();
		$_SESSION['id_user']=$dato['id_usuario'];
		$_SESSION['mail']=$dato['mail'];
		$_SESSION['news']=$dato['news'];
		$_SESSION['user']=$dato['usuario'];
		if($autov==1)
		{
		$ssid=uniqid();
		$sql="UPDATE usuarios SET sessionid='$ssid' WHERE usuario='$user' AND contrasenia='$pass'";
		$resp=$conexion->query($sql);
		setcookie('user_n',$user,time()+31536000,'/');
		setcookie('sessionid',$ssid,time()+31536000,'/');
		setcookie('mail',$_SESSION['mail'],time()+31536000,'/');
		setcookie('news',$_SESSION['news'],time()+31536000,'/');
		setcookie('id_user',$_SESSION['id_user'],time()+31536000,'/');
		}
    	echo  1;
	}
	else{
	session_destroy();
	echo  0;
	}
 
?>