<?php 
	include("conexion.php");
	$conn = conectar();

	$id_marca = $_GET['id'];

	$query = "DELETE FROM marca WHERE id_marca = $id_marca";
	$consulta = pg_query($conn, $query);

	if($consulta){
		Header("Location: Marca.php");
	}

?>