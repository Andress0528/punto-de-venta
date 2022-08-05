<?php 
	include("conexion.php");
	$conn = conectar();

	$id_categoria = $_GET['id'];

	$query = "DELETE FROM categoria WHERE id_categoria = $id_categoria";
	$consulta = pg_query($conn, $query);

	if($consulta){
		Header("Location: Categorias.php");
	}

?>