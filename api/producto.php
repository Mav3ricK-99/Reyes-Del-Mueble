<?php 
require_once('api.php');
$resultado = NULL;
$parametros = NULL;
$id=$_GET['id_mueble'];
$tipo=$_GET['tipo'];
$request = resolveRequest();

if ($request['method']==='get')
{
	$parametros = $_GET;
    $mysqli = new mysqli("localhost", "id6892513_agustin", "RiverPlate", "id6892513_reyesdelpino", 3306);
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    if (isset($_GET['id_mueble']))
    {
        $query = "SELECT * FROM muebles WHERE id=".$id;
        $resultado = $mysqli->query($query);
    } else {
        $query = "SELECT * FROM muebles ORDER BY id ASC LIMIT 6";
        $resultado = $mysqli->query("SELECT * FROM muebles ORDER BY id ASC LIMIT 6");
    }

    $data = [];
    if ($resultado->num_rows > 0)
    {
        while ($fila = $resultado->fetch_assoc())
        {
            $data[] = $fila;
        }
        json_response($data, 200);
    } else {
        json_response($data, 200);
    }
    
}



?>