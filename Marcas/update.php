<?php 
	include("conexion.php");
	$conn = conectar();

	$id_marca = $_POST['id_marca'];
	$nombre_marca = $_POST['nombre_marca'];

	$query = "UPDATE marca SET nombre_marca = '$nombre_marca' WHERE id_marca = $id_marca";
	$consulta = pg_query($conn, $query);
	
	if($consulta){
		Header("Location: Marca.php");
	}

?>