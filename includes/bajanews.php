<?php
	if(isset($_POST['Enviarbaja']))
	{
		require_once('conexion.php');
		$email=$_POST['mail'];
		$c=0;
		$existesql="SELECT * FROM usuarios WHERE mail='$email' AND news=1";
		$existe=$conexion->query($existesql);
		if($existe->num_rows>0)
		{
			$quitarn="UPDATE usuarios SET news=0 WHERE mail='$email'";
			$quitar=$conexion->query($quitarn);
			if($quitar){echo 1;$c=1;}//Cuenta quitada de NEWS
		}
		$existesql2="SELECT * FROM news_table WHERE mail='$email'";
		$existe2=$conexion->query($existesql2);
		if($existe2->num_rows>0)
		{
			$quitarn="DELETE FROM news_table WHERE mail='$email'";
			$quitar=$conexion->query($quitarn);
			if($quitar){echo 1;$c=1;}//Cuenta quitada de NEWS
		}
		if($c==0)
		{echo 0;}
	}
?>