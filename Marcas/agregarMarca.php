<?php 
	include("conexion.php");
	$conn = conectar();

	$id_marca = $_POST['id_marca'];
	$nombre_marca = $_POST['nombre_marca'];

	$query = "INSERT INTO marca VALUES($id_marca, '$nombre_marca')";
	$consulta = pg_query($conn, $query);

	if($consulta){
		Header("Location:marca.php");
	}

?>